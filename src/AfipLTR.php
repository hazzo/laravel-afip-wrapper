<?php

namespace hazzo\LaravelAfipWrapper;


use DOMDocument;

class AfipLTR
{

    /**
     * AfipLTR constructor.
     */
    function __construct()
    {

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
     * @param $path
     */
    function create($cuit, $cn, $id, $generationTime, $expirationTime, $path)
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
        $dom->save($path);

    }


}