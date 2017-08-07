<?php

class FECompConsultarResponse
{

    /**
     * @var FECompConsultaResponse $FECompConsultarResult
     * @access public
     */
    public $FECompConsultarResult = null;

    /**
     * @param FECompConsultaResponse $FECompConsultarResult
     * @access public
     */
    public function __construct($FECompConsultarResult)
    {
      $this->FECompConsultarResult = $FECompConsultarResult;
    }

}
