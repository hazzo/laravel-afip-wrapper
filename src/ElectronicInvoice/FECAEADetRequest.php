<?php

include_once('FEDetRequest.php');

class FECAEADetRequest extends FEDetRequest
{

    /**
     * @var string $CAEA
     * @access public
     */
    public $CAEA = null;

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
     * @param string $CAEA
     * @access public
     */
    public function __construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $ImpTotal, $ImpTotConc, $ImpNeto, $ImpOpEx, $ImpTrib, $ImpIVA, $FchServDesde, $FchServHasta, $FchVtoPago, $MonId, $MonCotiz, $CbtesAsoc, $Tributos, $Iva, $Opcionales, $CAEA)
    {
      parent::__construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $ImpTotal, $ImpTotConc, $ImpNeto, $ImpOpEx, $ImpTrib, $ImpIVA, $FchServDesde, $FchServHasta, $FchVtoPago, $MonId, $MonCotiz, $CbtesAsoc, $Tributos, $Iva, $Opcionales);
      $this->CAEA = $CAEA;
    }

}
