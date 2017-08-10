<?php

include_once('FECAEDetRequest.php');

class FECompConsResponse extends FECAEDetRequest
{

    /**
     * @var string $Resultado
     * @access public
     */
    public $Resultado = null;

    /**
     * @var string $CodAutorizacion
     * @access public
     */
    public $CodAutorizacion = null;

    /**
     * @var string $EmisionTipo
     * @access public
     */
    public $EmisionTipo = null;

    /**
     * @var string $FchVto
     * @access public
     */
    public $FchVto = null;

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
     * @param int $Concepto
     * @param int $DocTipo
     * @param int $DocNro
     * @param int $CbteDesde
     * @param int $CbteHasta
     * @param string $CbteFch
     * @param float $ImpTotal
     * @param float $ImpTotConc
     * @param float $ImpNeto
     * @param float $ImpOpEx
     * @param float $ImpTrib
     * @param float $ImpIVA
     * @param string $FchServDesde
     * @param string $FchServHasta
     * @param string $FchVtoPago
     * @param string $MonId
     * @param float $MonCotiz
     * @param CbteAsoc[] $CbtesAsoc
     * @param Tributo[] $Tributos
     * @param AlicIva[] $Iva
     * @param Opcional[] $Opcionales
     * @param string $Resultado
     * @param string $CodAutorizacion
     * @param string $EmisionTipo
     * @param string $FchVto
     * @param string $FchProceso
     * @param Obs[] $Observaciones
     * @param int $PtoVta
     * @param int $CbteTipo
     * @access public
     */
    public function __construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $ImpTotal, $ImpTotConc, $ImpNeto, $ImpOpEx, $ImpTrib, $ImpIVA, $FchServDesde, $FchServHasta, $FchVtoPago, $MonId, $MonCotiz, $CbtesAsoc, $Tributos, $Iva, $Opcionales, $Resultado, $CodAutorizacion, $EmisionTipo, $FchVto, $FchProceso, $Observaciones, $PtoVta, $CbteTipo)
    {
      parent::__construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $ImpTotal, $ImpTotConc, $ImpNeto, $ImpOpEx, $ImpTrib, $ImpIVA, $FchServDesde, $FchServHasta, $FchVtoPago, $MonId, $MonCotiz, $CbtesAsoc, $Tributos, $Iva, $Opcionales);
      $this->Resultado = $Resultado;
      $this->CodAutorizacion = $CodAutorizacion;
      $this->EmisionTipo = $EmisionTipo;
      $this->FchVto = $FchVto;
      $this->FchProceso = $FchProceso;
      $this->Observaciones = $Observaciones;
      $this->PtoVta = $PtoVta;
      $this->CbteTipo = $CbteTipo;
    }

}
