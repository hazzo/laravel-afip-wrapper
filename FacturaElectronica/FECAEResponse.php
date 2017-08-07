<?php

class FECAEResponse
{

    /**
     * @var FECAECabResponse $FeCabResp
     * @access public
     */
    public $FeCabResp = null;

    /**
     * @var FECAEDetResponse[] $FeDetResp
     * @access public
     */
    public $FeDetResp = null;

    /**
     * @var Evt[] $Events
     * @access public
     */
    public $Events = null;

    /**
     * @var Err[] $Errors
     * @access public
     */
    public $Errors = null;

    /**
     * @param FECAECabResponse $FeCabResp
     * @param FECAEDetResponse[] $FeDetResp
     * @param Evt[] $Events
     * @param Err[] $Errors
     * @access public
     */
    public function __construct($FeCabResp, $FeDetResp, $Events, $Errors)
    {
      $this->FeCabResp = $FeCabResp;
      $this->FeDetResp = $FeDetResp;
      $this->Events = $Events;
      $this->Errors = $Errors;
    }

}
