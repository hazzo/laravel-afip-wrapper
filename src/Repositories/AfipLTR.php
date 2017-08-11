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
     * //
     * @return $this
     */
    function create($cuit, $cn, $id, $generationTime, $expirationTime)
    {

        $dom = new DOMDocument('1.0', 'utf-8');
        $loginRequestXML = $dom->createElement("loginTicketRequest");
        $loginRequestXML->setAttribute('version', '1.0');
        $header = $loginRequestXML->appendChild($dom->createElement("header"));
        $header->appendChild($dom->createElement("source", "SERIALNUMBER=CUIT " . $cuit . ", CN=" . $cn));
        $header->appendChild($dom->createElement("destination", "cn=wsaahomo,o=afip,c=ar,serialNumber=CUIT 33693450239"));
        $header->appendChild($dom->createElement("uniqueId", $id));
        $header->appendChild($dom->createElement("generationTime", $generationTime));
        $header->appendChild($dom->createElement("expirationTime", $expirationTime));
        $loginRequestXML->appendChild($dom->createElement("service", "wsfe"));
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
     * @return $this
     */
    function save() {
        $this->domDocument->save($this->tempFolder . "LoginTicketRequest.xml");
        return $this;
    }


    /**
     * @param $privateKey
     * @param $pemCrt
     * @return $this
     */
    function sign($privateKey, $pemCrt) {
        exec('openssl cms -sign -in ' . $this->tempFolder . 'LoginTicketRequest.xml -nodetach -inkey '. $privateKey .' -signer '. $pemCrt .' -out ' . $this->tempFolder . 'LoginTicketRequest.xml.cms -outform DER');
        return $this;
    }

    /**
     * @return $this
     */
    function encode() {
        exec('openssl enc -base64 -in '. $this->tempFolder . 'LoginTicketRequest.xml.cms -out ' . $this->tempFolder . 'LoginTicketRequest.xml.cms.base64');
        $this->ltr = file_get_contents($this->tempFolder . 'LoginTicketRequest.xml.cms.base64');
        return $this;
    }
}