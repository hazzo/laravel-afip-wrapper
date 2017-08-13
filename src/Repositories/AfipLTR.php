<?php

namespace hazzo\LaravelAfipWrapper\Repositories;

use DOMDocument;

class AfipLTR
{
    /**
     * Temporary folder dir.
     * @var string
     */
    protected $tempFolder;

    /**
     * DOMDocument element.
     * @var DOMDocument
     */
    protected $domDocument;

    /**
     * Unique character for distinct filename.
     * @var string
     */
    protected $unique;

    /**
     * XML filename.
     * @var string
     */
    protected $xml;

    /**
     * CMS filename.
     * @var string
     */
    protected $cms;

    /**
     * Base64L filename.
     * @var string
     */
    protected $base64;

    /**
     * LoginTicketRequest signed & coded
     * @var DOMDocument
     */
    public $ltr;


    /**
     * AfipLTR constructor.
     */
    function __construct()
    {
        // Get web service config
        $config = new AfipConfig();
        $this->tempFolder = $config->tempFolder;
    }


    /**
     *
     * Generate LoginRequestTicket.xml
     * @param $cuit
     * @param $cn
     * @param $id
     * // Times must be ISO8601 formatted
     * @param $generationTime
     * @param $expirationTime
     * @return $this
     */
    function create($cuit, $cn, $id, $generationTime, $expirationTime)
    {

        $dom = new DOMDocument('1.0', 'utf-8');
        $loginRequestXML = $dom->createElement('loginTicketRequest');
        $loginRequestXML->setAttribute('version', '1.0');
        $header = $loginRequestXML->appendChild($dom->createElement('header'));
        $header->appendChild($dom->createElement('source', 'SERIALNUMBER=CUIT ' . $cuit . ', CN=' . $cn));
        $header->appendChild($dom->createElement('destination', 'cn=wsaahomo,o=afip,c=ar,serialNumber=CUIT 33693450239'));
        $header->appendChild($dom->createElement('uniqueId', $id));
        $header->appendChild($dom->createElement('generationTime', $generationTime));
        $header->appendChild($dom->createElement('expirationTime', $expirationTime));
        $loginRequestXML->appendChild($dom->createElement('service', 'wsfe'));
        $dom->appendChild($loginRequestXML);
        $this->domDocument = $dom;
        return $this;
    }


    /**
     * Validate DOMDocument XML
     */
    function validate() {
        if (!$this->domDocument->schemaValidate(__DIR__ . '/LoginTicketRequest.xsd')) {
            print '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
        }
        return $this;
    }

    /**
     * Save current DOMDocument
     * @param $unique
     * @return $this
     */
    function save($unique = false) {
        $filename = 'LoginTicketRequest.xml';
        if($unique) {
            $filename = 'LoginTicketRequest_' . $unique . '.xml';
            $this->unique = $unique;
        }
        $this->domDocument->save($this->tempFolder . $filename);

        $this->xml = $filename;
        return $this;
    }


    /**
     * @param $privateKey
     * @param $pemCrt
     * @return $this
     */
    function sign($privateKey, $pemCrt) {
        $outputFilename = 'LoginTicketRequest.xml.cms';
        if($this->unique) {
            $outputFilename = 'LoginTicketRequest_'. $this->unique .'.xml.cms';
        }

        exec('openssl cms -sign -in ' . $this->tempFolder . $this->xml . ' -nodetach -inkey '. $privateKey .' -signer '. $pemCrt .' -out ' . $this->tempFolder . $outputFilename . ' -outform DER');

        $this->cms = $outputFilename;
        return $this;
    }

    /**
     * @return $this
     */
    function encode() {
        $outputFilename = 'LoginTicketRequest.xml.cms.base64';
        if($this->unique) {
            $outputFilename = 'LoginTicketRequest_'. $this->unique .'.xml.cms.base64';
        }

        exec('openssl enc -base64 -in '. $this->tempFolder . $this->cms . ' -out ' . $this->tempFolder . $outputFilename);
        $this->ltr = file_get_contents($this->tempFolder . $outputFilename);

        $this->base64 = $outputFilename;
        return $this;
    }
}