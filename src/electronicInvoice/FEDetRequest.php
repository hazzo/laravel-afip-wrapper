<?php

class FEDetRequest
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
     * @var float $ImpTotal
     * @access public
     */
    public $ImpTotal = null;

    /**
     * @var float $ImpTotConc
     * @access public
     */
    public $ImpTotConc = null;

    /**
     * @var float $ImpNeto
     * @access public
     */
    public $ImpNeto = null;

    /**
     * @var float $ImpOpEx
     * @access public
     */
    public $ImpOpEx = null;

    /**
     * @var float $ImpTrib
     * @access public
     */
    public $ImpTrib = null;

    /**
     * @var float $ImpIVA
     * @access public
     */
    public $ImpIVA = null;

    /**
     * @var string $FchServDesde
     * @access public
     */
    public $FchServDesde = null;

    /**
     * @var string $FchServHasta
     * @access public
     */
    public $FchServHasta = null;

    /**
     * @var string $FchVtoPago
     * @access public
     */
    public $FchVtoPago = null;

    /**
     * @var string $MonId
     * @access public
     */
    public $MonId = null;

    /**
     * @var float $MonCotiz
     * @access public
     */
    public $MonCotiz = null;

    /**
     * @var CbteAsoc[] $CbtesAsoc
     * @access public
     */
    public $CbtesAsoc = null;

    /**
     * @var Tributo[] $Tributos
     * @access public
     */
    public $Tributos = null;

    /**
     * @var AlicIva[] $Iva
     * @access public
     */
    public $Iva = null;

    /**
     * @var Opcional[] $Opcionales
     * @access public
     */
    public $Opcionales = null;

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
      $this->Concepto = $Concepto;
      $this->DocTipo = $DocTipo;
      $this->DocNro = $DocNro;
      $this->CbteDesde = $CbteDesde;
      $this->CbteHasta = $CbteHasta;
      $this->CbteFch = $CbteFch;
      $this->ImpTotal = $ImpTotal;
      $this->ImpTotConc = $ImpTotConc;
      $this->ImpNeto = $ImpNeto;
      $this->ImpOpEx = $ImpOpEx;
      $this->ImpTrib = $ImpTrib;
      $this->ImpIVA = $ImpIVA;
      $this->FchServDesde = $FchServDesde;
      $this->FchServHasta = $FchServHasta;
      $this->FchVtoPago = $FchVtoPago;
      $this->MonId = $MonId;
      $this->MonCotiz = $MonCotiz;
      $this->CbtesAsoc = $CbtesAsoc;
      $this->Tributos = $Tributos;
      $this->Iva = $Iva;
      $this->Opcionales = $Opcionales;
    }

}
