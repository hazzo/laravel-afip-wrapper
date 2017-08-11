<?php

class FECAESolicitar
{

    /**
     * @var FEAuthRequest $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @var FECAERequest $FeCAEReq
     * @access public
     */
    public $FeCAEReq = null;

    /**
     * @param FEAuthRequest $Auth
     * @param FECAERequest $FeCAEReq
     * @access public
     */
    public function __construct($Auth, $FeCAEReq)
    {
      $this->Auth = $Auth;
      $this->FeCAEReq = $FeCAEReq;
    }

}
