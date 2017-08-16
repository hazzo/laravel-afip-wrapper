<?php

class FECAEASolicitarResponse
{

    /**
     * @var FECAEAGetResponse $FECAEASolicitarResult
     * @access public
     */
    public $FECAEASolicitarResult = null;

    /**
     * @param FECAEAGetResponse $FECAEASolicitarResult
     * @access public
     */
    public function __construct($FECAEASolicitarResult)
    {
      $this->FECAEASolicitarResult = $FECAEASolicitarResult;
    }

}
