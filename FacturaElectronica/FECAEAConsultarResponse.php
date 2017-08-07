<?php

class FECAEAConsultarResponse
{

    /**
     * @var FECAEAGetResponse $FECAEAConsultarResult
     * @access public
     */
    public $FECAEAConsultarResult = null;

    /**
     * @param FECAEAGetResponse $FECAEAConsultarResult
     * @access public
     */
    public function __construct($FECAEAConsultarResult)
    {
      $this->FECAEAConsultarResult = $FECAEAConsultarResult;
    }

}
