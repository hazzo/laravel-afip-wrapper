<?php

class FECompTotXRequestResponse
{

    /**
     * @var FERegXReqResponse $FECompTotXRequestResult
     * @access public
     */
    public $FECompTotXRequestResult = null;

    /**
     * @param FERegXReqResponse $FECompTotXRequestResult
     * @access public
     */
    public function __construct($FECompTotXRequestResult)
    {
      $this->FECompTotXRequestResult = $FECompTotXRequestResult;
    }

}
