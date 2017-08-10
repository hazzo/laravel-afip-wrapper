<?php

class FERecuperaLastCbteResponse
{

    /**
     * @var Err[] $Errors
     * @access public
     */
    public $Errors = null;

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
     * @var int $CbteNro
     * @access public
     */
    public $CbteNro = null;

    /**
     * @var Evt[] $Events
     * @access public
     */
    public $Events = null;

    /**
     * @param Err[] $Errors
     * @param int $PtoVta
     * @param int $CbteTipo
     * @param int $CbteNro
     * @param Evt[] $Events
     * @access public
     */
    public function __construct($Errors, $PtoVta, $CbteTipo, $CbteNro, $Events)
    {
      $this->Errors = $Errors;
      $this->PtoVta = $PtoVta;
      $this->CbteTipo = $CbteTipo;
      $this->CbteNro = $CbteNro;
      $this->Events = $Events;
    }

}
