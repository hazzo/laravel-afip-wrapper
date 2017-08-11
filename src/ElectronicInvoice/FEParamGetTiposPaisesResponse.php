<?php

class FEParamGetTiposPaisesResponse
{

    /**
     * @var FEPaisResponse $FEParamGetTiposPaisesResult
     * @access public
     */
    public $FEParamGetTiposPaisesResult = null;

    /**
     * @param FEPaisResponse $FEParamGetTiposPaisesResult
     * @access public
     */
    public function __construct($FEParamGetTiposPaisesResult)
    {
      $this->FEParamGetTiposPaisesResult = $FEParamGetTiposPaisesResult;
    }

}
