<?php

class PtoVenta
{

    /**
     * @var int $Nro
     * @access public
     */
    public $Nro = null;

    /**
     * @var string $EmisionTipo
     * @access public
     */
    public $EmisionTipo = null;

    /**
     * @var string $Bloqueado
     * @access public
     */
    public $Bloqueado = null;

    /**
     * @var string $FchBaja
     * @access public
     */
    public $FchBaja = null;

    /**
     * @param int $Nro
     * @param string $EmisionTipo
     * @param string $Bloqueado
     * @param string $FchBaja
     * @access public
     */
    public function __construct($Nro, $EmisionTipo, $Bloqueado, $FchBaja)
    {
      $this->Nro = $Nro;
      $this->EmisionTipo = $EmisionTipo;
      $this->Bloqueado = $Bloqueado;
      $this->FchBaja = $FchBaja;
    }

}
