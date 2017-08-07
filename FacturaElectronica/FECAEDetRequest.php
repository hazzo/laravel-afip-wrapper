<?php

include_once('FEDetRequest.php');

class FECAEDetRequest extends FEDetRequest
{

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
     * @access public
     */
    public function __construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $ImpTotal, $ImpTotConc, $ImpNeto, $ImpOpEx, $ImpTrib, $ImpIVA, $FchServDesde, $FchServHasta, $FchVtoPago, $MonId, $MonCotiz, $CbtesAsoc, $Tributos, $Iva, $Opcionales)
    {
      parent::__construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $ImpTotal, $ImpTotConc, $ImpNeto, $ImpOpEx, $ImpTrib, $ImpIVA, $FchServDesde, $FchServHasta, $FchVtoPago, $MonId, $MonCotiz, $CbtesAsoc, $Tributos, $Iva, $Opcionales);
    }

}
