<?php

class FECompTotXRequest
{

    /**
     * @var FEAuthRequest $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @param FEAuthRequest $Auth
     * @access public
     */
    public function __construct($Auth)
    {
      $this->Auth = $Auth;
    }

}
