<?php

class FEParamGetTiposTributosResponse
{

    /**
     * @var FETributoResponse $FEParamGetTiposTributosResult
     * @access public
     */
    public $FEParamGetTiposTributosResult = null;

    /**
     * @param FETributoResponse $FEParamGetTiposTributosResult
     * @access public
     */
    public function __construct($FEParamGetTiposTributosResult)
    {
      $this->FEParamGetTiposTributosResult = $FEParamGetTiposTributosResult;
    }

}
