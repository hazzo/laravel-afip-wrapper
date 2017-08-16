<?php

class FEParamGetTiposCbteResponse
{

    /**
     * @var CbteTipoResponse $FEParamGetTiposCbteResult
     * @access public
     */
    public $FEParamGetTiposCbteResult = null;

    /**
     * @param CbteTipoResponse $FEParamGetTiposCbteResult
     * @access public
     */
    public function __construct($FEParamGetTiposCbteResult)
    {
      $this->FEParamGetTiposCbteResult = $FEParamGetTiposCbteResult;
    }

}
