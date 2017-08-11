<?php

class FECAEAGet
{

    /**
     * @var string $CAEA
     * @access public
     */
    public $CAEA = null;

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
     * @var string $FchVigDesde
     * @access public
     */
    public $FchVigDesde = null;

    /**
     * @var string $FchVigHasta
     * @access public
     */
    public $FchVigHasta = null;

    /**
     * @var string $FchTopeInf
     * @access public
     */
    public $FchTopeInf = null;

    /**
     * @var string $FchProceso
     * @access public
     */
    public $FchProceso = null;

    /**
     * @var Obs[] $Observaciones
     * @access public
     */
    public $Observaciones = null;

    /**
     * @param string $CAEA
     * @param int $Periodo
     * @param int $Orden
     * @param string $FchVigDesde
     * @param string $FchVigHasta
     * @param string $FchTopeInf
     * @param string $FchProceso
     * @param Obs[] $Observaciones
     * @access public
     */
    public function __construct($CAEA, $Periodo, $Orden, $FchVigDesde, $FchVigHasta, $FchTopeInf, $FchProceso, $Observaciones)
    {
      $this->CAEA = $CAEA;
      $this->Periodo = $Periodo;
      $this->Orden = $Orden;
      $this->FchVigDesde = $FchVigDesde;
      $this->FchVigHasta = $FchVigHasta;
      $this->FchTopeInf = $FchTopeInf;
      $this->FchProceso = $FchProceso;
      $this->Observaciones = $Observaciones;
    }

}
