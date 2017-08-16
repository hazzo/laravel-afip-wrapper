<?php

class FECompUltimoAutorizadoResponse
{

    /**
     * @var FERecuperaLastCbteResponse $FECompUltimoAutorizadoResult
     * @access public
     */
    public $FECompUltimoAutorizadoResult = null;

    /**
     * @param FERecuperaLastCbteResponse $FECompUltimoAutorizadoResult
     * @access public
     */
    public function __construct($FECompUltimoAutorizadoResult)
    {
      $this->FECompUltimoAutorizadoResult = $FECompUltimoAutorizadoResult;
    }

}
