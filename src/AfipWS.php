<?php
namespace hazzo\LaravelAfipWrapper;

Class AfipWs {

    /**
     * Auth token.
     * @var string
     */
    protected $token;

    /**
     * Auth sign.
     * @var string
     */
    protected $sign;

    /**
     * AfipWs constructor.
     * @param $tra
     */
    function __construct($tra)
    {
        $auth = new AfipAuth($tra);
        $authData = $auth->trimResponse();

        // Get used variables
        $this->token = $authData['vToken'];
        $this->sign = $authData['vSign'];
    }


    /**
     * Return token for TRA Auth
     */
    function token() {
        return $this->token;
    }

}