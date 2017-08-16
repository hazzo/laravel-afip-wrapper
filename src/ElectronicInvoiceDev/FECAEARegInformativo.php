<?php

class FECAEARegInformativo
{

    /**
     * @var FEAuthRequest $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @var FECAEARequest $FeCAEARegInfReq
     * @access public
     */
    public $FeCAEARegInfReq = null;

    /**
     * @param FEAuthRequest $Auth
     * @param FECAEARequest $FeCAEARegInfReq
     * @access public
     */
    public function __construct($Auth, $FeCAEARegInfReq)
    {
      $this->Auth = $Auth;
      $this->FeCAEARegInfReq = $FeCAEARegInfReq;
    }

}
