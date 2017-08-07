<?php

include_once('FEDetResponse.php');

class FECAEDetResponse extends FEDetResponse
{

    /**
     * @var string $CAE
     * @access public
     */
    public $CAE = null;

    /**
     * @var string $CAEFchVto
     * @access public
     */
    public $CAEFchVto = null;

    /**
     * @param int $Concepto
     * @param int $DocTipo
     * @param int $DocNro
     * @param int $CbteDesde
     * @param int $CbteHasta
     * @param string $CbteFch
     * @param string $Resultado
     * @param Obs[] $Observaciones
     * @param string $CAE
     * @param string $CAEFchVto
     * @access public
     */
    public function __construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $Resultado, $Observaciones, $CAE, $CAEFchVto)
    {
      parent::__construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $Resultado, $Observaciones);
      $this->CAE = $CAE;
      $this->CAEFchVto = $CAEFchVto;
    }

}
