<?php

class TributoTipo
{

    /**
     * @var int $Id
     * @access public
     */
    public $Id = null;

    /**
     * @var string $Desc
     * @access public
     */
    public $Desc = null;

    /**
     * @var string $FchDesde
     * @access public
     */
    public $FchDesde = null;

    /**
     * @var string $FchHasta
     * @access public
     */
    public $FchHasta = null;

    /**
     * @param int $Id
     * @param string $Desc
     * @param string $FchDesde
     * @param string $FchHasta
     * @access public
     */
    public function __construct($Id, $Desc, $FchDesde, $FchHasta)
    {
      $this->Id = $Id;
      $this->Desc = $Desc;
      $this->FchDesde = $FchDesde;
      $this->FchHasta = $FchHasta;
    }

}
