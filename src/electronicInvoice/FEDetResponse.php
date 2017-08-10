<?php

class FEDetResponse
{

    /**
     * @var int $Concepto
     * @access public
     */
    public $Concepto = null;

    /**
     * @var int $DocTipo
     * @access public
     */
    public $DocTipo = null;

    /**
     * @var int $DocNro
     * @access public
     */
    public $DocNro = null;

    /**
     * @var int $CbteDesde
     * @access public
     */
    public $CbteDesde = null;

    /**
     * @var int $CbteHasta
     * @access public
     */
    public $CbteHasta = null;

    /**
     * @var string $CbteFch
     * @access public
     */
    public $CbteFch = null;

    /**
     * @var string $Resultado
     * @access public
     */
    public $Resultado = null;

    /**
     * @var Obs[] $Observaciones
     * @access public
     */
    public $Observaciones = null;

    /**
     * @param int $Concepto
     * @param int $DocTipo
     * @param int $DocNro
     * @param int $CbteDesde
     * @param int $CbteHasta
     * @param string $CbteFch
     * @param string $Resultado
     * @param Obs[] $Observaciones
     * @access public
     */
    public function __construct($Concepto, $DocTipo, $DocNro, $CbteDesde, $CbteHasta, $CbteFch, $Resultado, $Observaciones)
    {
      $this->Concepto = $Concepto;
      $this->DocTipo = $DocTipo;
      $this->DocNro = $DocNro;
      $this->CbteDesde = $CbteDesde;
      $this->CbteHasta = $CbteHasta;
      $this->CbteFch = $CbteFch;
      $this->Resultado = $Resultado;
      $this->Observaciones = $Observaciones;
    }

}
