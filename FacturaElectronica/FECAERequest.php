<?php

class FECAERequest
{

    /**
     * @var FECAECabRequest $FeCabReq
     * @access public
     */
    public $FeCabReq = null;

    /**
     * @var FECAEDetRequest[] $FeDetReq
     * @access public
     */
    public $FeDetReq = null;

    /**
     * @param FECAECabRequest $FeCabReq
     * @param FECAEDetRequest[] $FeDetReq
     * @access public
     */
    public function __construct($FeCabReq, $FeDetReq)
    {
      $this->FeCabReq = $FeCabReq;
      $this->FeDetReq = $FeDetReq;
    }

}
