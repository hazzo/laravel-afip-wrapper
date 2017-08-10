<?php

class FEParamGetCotizacionResponse
{

    /**
     * @var FECotizacionResponse $FEParamGetCotizacionResult
     * @access public
     */
    public $FEParamGetCotizacionResult = null;

    /**
     * @param FECotizacionResponse $FEParamGetCotizacionResult
     * @access public
     */
    public function __construct($FEParamGetCotizacionResult)
    {
      $this->FEParamGetCotizacionResult = $FEParamGetCotizacionResult;
    }

}
