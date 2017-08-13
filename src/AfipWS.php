<?php
namespace hazzo\LaravelAfipWrapper;

use Carbon\Carbon;
use hazzo\LaravelAfipWrapper\repositories\AfipAuth;
use hazzo\LaravelAfipWrapper\repositories\AfipLTR;

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

    /**
     * @param array $options
     * @return \DOMDocument
     */
    function generateLTR(array $options = array()) {

        if(empty($options)) {
            var_dump('No options given');
        }

        // Map array options to variables
        $cuit = $options['cuit'];
        $cn = $options['cn'];
        $id = $options['id'];
        $privateKey = $options['privateKey'];
        $pemCert = $options['pemCert'];
        $genTime = (array_key_exists('genTime', $options)) ? $options['genTime'] : null;
        $expTime = (array_key_exists('expTime', $options)) ? $options['expTime'] : null;

        // Check if times given if not set default now
        if(!$genTime || !$expTime) {
            $today = Carbon::now();
            $genTime = $today->toIso8601String();
            $expTime = $today->addHours(24)->toIso8601String();
        }

        $ltr = new AfipLTR();
        $ltr->create($cuit, $cn, $id, $genTime, $expTime)
            ->validate()
            ->save($id)
            ->sign($privateKey,  $pemCert)
            ->encode();

        $this->cuit = $cuit;

        return $ltr->ltr;
    }

    /**
     * @param $ltr
     * @return $this
     */
    function generateTRA($ltr) {
        $auth = new AfipAuth($ltr);
        $authData = $auth->trimResponse();

        // Get used variables
        $this->token = $authData['vToken'];
        $this->sign = $authData['vSign'];

        return $this;
    }

}