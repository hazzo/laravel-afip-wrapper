<?php

class FECAEARequest
{

    /**
     * @var FECAEACabRequest $FeCabReq
     * @access public
     */
    public $FeCabReq = null;

    /**
     * @var FECAEADetRequest[] $FeDetReq
     * @access public
     */
    public $FeDetReq = null;

    /**
     * @param FECAEACabRequest $FeCabReq
     * @param FECAEADetRequest[] $FeDetReq
     * @access public
     */
    public function __construct($FeCabReq, $FeDetReq)
    {
      $this->FeCabReq = $FeCabReq;
      $this->FeDetReq = $FeDetReq;
    }

}
