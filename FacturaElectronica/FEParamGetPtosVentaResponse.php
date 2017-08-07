<?php

class FEParamGetPtosVentaResponse
{

    /**
     * @var FEPtoVentaResponse $FEParamGetPtosVentaResult
     * @access public
     */
    public $FEParamGetPtosVentaResult = null;

    /**
     * @param FEPtoVentaResponse $FEParamGetPtosVentaResult
     * @access public
     */
    public function __construct($FEParamGetPtosVentaResult)
    {
      $this->FEParamGetPtosVentaResult = $FEParamGetPtosVentaResult;
    }

}
