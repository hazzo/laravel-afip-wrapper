<?php

class FEParamGetTiposConceptoResponse
{

    /**
     * @var ConceptoTipoResponse $FEParamGetTiposConceptoResult
     * @access public
     */
    public $FEParamGetTiposConceptoResult = null;

    /**
     * @param ConceptoTipoResponse $FEParamGetTiposConceptoResult
     * @access public
     */
    public function __construct($FEParamGetTiposConceptoResult)
    {
      $this->FEParamGetTiposConceptoResult = $FEParamGetTiposConceptoResult;
    }

}
