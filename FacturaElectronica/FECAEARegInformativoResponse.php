<?php

class FECAEARegInformativoResponse
{

    /**
     * @var FECAEAResponse $FECAEARegInformativoResult
     * @access public
     */
    public $FECAEARegInformativoResult = null;

    /**
     * @param FECAEAResponse $FECAEARegInformativoResult
     * @access public
     */
    public function __construct($FECAEARegInformativoResult)
    {
      $this->FECAEARegInformativoResult = $FECAEARegInformativoResult;
    }

}
