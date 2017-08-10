<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/src/electronicInvoice/Service.php';

use hazzo\LaravelAfipWrapper\AfipWs;

// Get TA to extract token and sign
$afipWs = new AfipWs();
$tra = $afipWs->generateLTR("20109625834", "apitest", 1, "AfipPrivateKey.key", "MyPEMKey.crt");
$afipWs->generateTRA($tra);

//Fetch data test to API
$afipService = new Service();
$afipAuth = new FEAuthRequest($afipWs->token, $afipWs->sign, $afipWs->cuit);
$response = $afipService->FEParamGetTiposOpcional(new FEParamGetTiposOpcional($afipAuth));

print_r($response->FEParamGetTiposOpcionalResult);