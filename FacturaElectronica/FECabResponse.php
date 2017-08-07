<?php

class FECabResponse
{

    /**
     * @var int $Cuit
     * @access public
     */
    public $Cuit = null;

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
     * @var string $FchProceso
     * @access public
     */
    public $FchProceso = null;

    /**
     * @var int $CantReg
     * @access public
     */
    public $CantReg = null;

    /**
     * @var string $Resultado
     * @access public
     */
    public $Resultado = null;

    /**
     * @var string $Reproceso
     * @access public
     */
    public $Reproceso = null;

    /**
     * @param int $Cuit
     * @param int $PtoVta
     * @param int $CbteTipo
     * @param string $FchProceso
     * @param int $CantReg
     * @param string $Resultado
     * @param string $Reproceso
     * @access public
     */
    public function __construct($Cuit, $PtoVta, $CbteTipo, $FchProceso, $CantReg, $Resultado, $Reproceso)
    {
      $this->Cuit = $Cuit;
      $this->PtoVta = $PtoVta;
      $this->CbteTipo = $CbteTipo;
      $this->FchProceso = $FchProceso;
      $this->CantReg = $CantReg;
      $this->Resultado = $Resultado;
      $this->Reproceso = $Reproceso;
    }

}
