<?php

class FECabRequest
{

    /**
     * @var int $CantReg
     * @access public
     */
    public $CantReg = null;

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
     * @param int $CantReg
     * @param int $PtoVta
     * @param int $CbteTipo
     * @access public
     */
    public function __construct($CantReg, $PtoVta, $CbteTipo)
    {
      $this->CantReg = $CantReg;
      $this->PtoVta = $PtoVta;
      $this->CbteTipo = $CbteTipo;
    }

}
