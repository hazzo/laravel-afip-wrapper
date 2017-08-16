<?php

class FECAEAConsultar
{

    /**
     * @var FEAuthRequest $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @var int $Periodo
     * @access public
     */
    public $Periodo = null;

    /**
     * @var int $Orden
     * @access public
     */
    public $Orden = null;

    /**
     * @param FEAuthRequest $Auth
     * @param int $Periodo
     * @param int $Orden
     * @access public
     */
    public function __construct($Auth, $Periodo, $Orden)
    {
      $this->Auth = $Auth;
      $this->Periodo = $Periodo;
      $this->Orden = $Orden;
    }

}
