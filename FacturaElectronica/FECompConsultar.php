<?php

class FECompConsultar
{

    /**
     * @var FEAuthRequest $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @var FECompConsultaReq $FeCompConsReq
     * @access public
     */
    public $FeCompConsReq = null;

    /**
     * @param FEAuthRequest $Auth
     * @param FECompConsultaReq $FeCompConsReq
     * @access public
     */
    public function __construct($Auth, $FeCompConsReq)
    {
      $this->Auth = $Auth;
      $this->FeCompConsReq = $FeCompConsReq;
    }

}
