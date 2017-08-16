<?php

class FECAESolicitarResponse
{

    /**
     * @var FECAEResponse $FECAESolicitarResult
     * @access public
     */
    public $FECAESolicitarResult = null;

    /**
     * @param FECAEResponse $FECAESolicitarResult
     * @access public
     */
    public function __construct($FECAESolicitarResult)
    {
      $this->FECAESolicitarResult = $FECAESolicitarResult;
    }

}
