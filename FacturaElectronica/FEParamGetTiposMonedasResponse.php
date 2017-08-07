<?php

class FEParamGetTiposMonedasResponse
{

    /**
     * @var MonedaResponse $FEParamGetTiposMonedasResult
     * @access public
     */
    public $FEParamGetTiposMonedasResult = null;

    /**
     * @param MonedaResponse $FEParamGetTiposMonedasResult
     * @access public
     */
    public function __construct($FEParamGetTiposMonedasResult)
    {
      $this->FEParamGetTiposMonedasResult = $FEParamGetTiposMonedasResult;
    }

}
