<?php

include_once('FEDetResponse.php');

class FECAEADetResponse extends FEDetResponse
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
     * @param string $Resultado
     * @param Obs[] $Observaciones
     * @param string $CAEA
     * @access public
     */
    public function __construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $Resultado, $Observaciones, $CAEA)
    {
      parent::__construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $Resultado, $Observaciones);
      $this->CAEA = $CAEA;
    }

}
