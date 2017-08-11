<?php

class FEParamGetTiposIvaResponse
{

    /**
     * @var IvaTipoResponse $FEParamGetTiposIvaResult
     * @access public
     */
    public $FEParamGetTiposIvaResult = null;

    /**
     * @param IvaTipoResponse $FEParamGetTiposIvaResult
     * @access public
     */
    public function __construct($FEParamGetTiposIvaResult)
    {
      $this->FEParamGetTiposIvaResult = $FEParamGetTiposIvaResult;
    }

}
