<?php

class CbteAsoc
{

    /**
     * @var int $Tipo
     * @access public
     */
    public $Tipo = null;

    /**
     * @var int $PtoVta
     * @access public
     */
    public $PtoVta = null;

    /**
     * @var int $Nro
     * @access public
     */
    public $Nro = null;

    /**
     * @var string $Cuit
     * @access public
     */
    public $Cuit = null;

    /**
     * @param int $Tipo
     * @param int $PtoVta
     * @param int $Nro
     * @param string $Cuit
     * @access public
     */
    public function __construct($Tipo, $PtoVta, $Nro, $Cuit)
    {
      $this->Tipo = $Tipo;
      $this->PtoVta = $PtoVta;
      $this->Nro = $Nro;
      $this->Cuit = $Cuit;
    }

}
