<?php
namespace hazzo\LaravelAfipWrapper;

use Carbon\Carbon;

Class AfipWs {

    /**
     * Auth token.
     * @var string
     */
    public $token;

    /**
     * Auth sign.
     * @var string
     */
    public $sign;

    /**
     * Auth cuit.
     * @var string
     */
    public $cuit;

    /**
     * AfipWs constructor.
     */
    function __construct()
    {

    }

    function generateLTR($cuit, $cn, $id, $privateKey, $pemCert, $genTime = null, $expTime = null) {
        $ltr = new AfipLTR();

        if(!$genTime || !$expTime) {
            $today = Carbon::now();
            $genTime = $today->toIso8601String();
            $expTime = $today->addHours(24)->toIso8601String();
        }

        $ltr->create($cuit, $cn, $id, $genTime, $expTime)
            ->validate()
            ->save()
            ->sign($privateKey,  $pemCert)
            ->encode();

        $this->cuit = $cuit;

        return $ltr->tra;
    }

    function generateTRA($tra) {
        $auth = new AfipAuth($tra);
        $authData = $auth->trimResponse();

        // Get used variables
        $this->token = $authData['vToken'];
        $this->sign = $authData['vSign'];

        return $this;
    }

}