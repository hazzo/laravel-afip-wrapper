<?php

class FEParamGetTiposDocResponse
{

    /**
     * @var DocTipoResponse $FEParamGetTiposDocResult
     * @access public
     */
    public $FEParamGetTiposDocResult = null;

    /**
     * @param DocTipoResponse $FEParamGetTiposDocResult
     * @access public
     */
    public function __construct($FEParamGetTiposDocResult)
    {
      $this->FEParamGetTiposDocResult = $FEParamGetTiposDocResult;
    }

}
