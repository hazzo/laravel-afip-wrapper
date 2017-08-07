<?php

require_once __DIR__.'/vendor/autoload.php';

use hazzo\LaravelAfipWrapper\AfipWs;

$cert = file_get_contents('MyPEMKey.crt');

$key = file_get_contents('AfipPrivateKey.key');

$dom = new DOMDocument('1.0', 'utf-8');
$loginRequestXML = $dom->createElement("loginTicketRequest");
$loginRequestXML->setAttribute('version', '1.0');
$header = $loginRequestXML->appendChild($dom->createElement("header"));
$header->appendChild($dom->createElement("source", "SERIALNUMBER=CUIT 20109625834, CN=apitest"));
$header->appendChild($dom->createElement("destination", "cn=wsaahomo,o=afip,c=ar,serialNumber=CUIT 33693450239"));
$header->appendChild($dom->createElement("uniqueId", 1));
$header->appendChild($dom->createElement("generationTime", "2017-08-07T00:00:00"));
$header->appendChild($dom->createElement("expirationTime", "2017-08-07T22:00:00"));
$loginRequestXML->appendChild($dom->createElement("service", "wsfe"));
$dom->appendChild($loginRequestXML);
$dom->save("LoginTicketRequest.xml");

$xml = new DOMDocument();
$xml->load('LoginTicketRequest.xml');

if (!$xml->schemaValidate('LoginTicketRequest.xsd')) {
    print '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
}

exec('openssl cms -sign -in LoginTicketRequest.xml -nodetach -inkey AfipPrivateKey.key -signer MyPEMKey.crt -out LoginTicketRequest.xml.cms -outform DER');

exec('openssl enc -base64 -in LoginTicketRequest.xml.cms -out LoginTicketRequest.xml.cms.base64');

// Get TA to extract token and sign
$tra = file_get_contents('LoginTicketRequest.xml.cms.base64');
$test = new AfipWs($tra);