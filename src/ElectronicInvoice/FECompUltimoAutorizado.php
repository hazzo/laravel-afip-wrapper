<?php

class FECompUltimoAutorizado
{

    /**
     * @var FEAuthRequest $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @var int $PtoVta
     * @access public
     */
    public $PtoVta = null;

    /**
     * @var int $CbteTipo
     * @access public
     */
    public $CbteTipo = null;

    /**
     * @param FEAuthRequest $Auth
     * @param int $PtoVta
     * @param int $CbteTipo
     * @access public
     */
    public function __construct($Auth, $PtoVta, $CbteTipo)
    {
      $this->Auth = $Auth;
      $this->PtoVta = $PtoVta;
      $this->CbteTipo = $CbteTipo;
    }

}
