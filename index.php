<?php

require_once __DIR__.'/vendor/autoload.php';

use Carbon\Carbon;
use hazzo\LaravelAfipWrapper\AfipLTR;
use hazzo\LaravelAfipWrapper\AfipWs;

$cert = file_get_contents('MyPEMKey.crt');

$key = file_get_contents('AfipPrivateKey.key');

$ltr = new AfipLTR();
$today = Carbon::now();
$genTime = $today->toIso8601String();
$expTime = $today->addHours(24)->toIso8601String();
$ltr->create("20109625834", "apitest", 1, $genTime, $expTime, "LoginTicketRequest.xml");

$xml = new DOMDocument();
$xml->load('LoginTicketRequest.xml');

if (!$xml->schemaValidate('LoginTicketRequest.xsd')) {
    print '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
}

exec('openssl cms -sign -in LoginTicketRequest.xml -nodetach -inkey AfipPrivateKey.key -signer MyPEMKey.crt -out LoginTicketRequest.xml.cms -outform DER');

exec('openssl enc -base64 -in LoginTicketRequest.xml.cms -out LoginTicketRequest.xml.cms.base64');

// Get TA to extract token and sign
$tra = file_get_contents('LoginTicketRequest.xml.cms.base64');
$afipWs = new AfipWs($tra);
echo($afipWs->token());