<?php

class FEAuthRequest
{

    /**
     * @var string $Token
     * @access public
     */
    public $Token = null;

    /**
     * @var string $Sign
     * @access public
     */
    public $Sign = null;

    /**
     * @var int $Cuit
     * @access public
     */
    public $Cuit = null;

    /**
     * @param string $Token
     * @param string $Sign
     * @param int $Cuit
     * @access public
     */
    public function __construct($Token, $Sign, $Cuit)
    {
      $this->Token = $Token;
      $this->Sign = $Sign;
      $this->Cuit = $Cuit;
    }

}
