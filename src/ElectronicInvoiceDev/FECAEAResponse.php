<?php

class FECAEAResponse
{

    /**
     * @var Err[] $Errors
     * @access public
     */
    public $Errors = null;

    /**
     * @var FECAEACabResponse $FeCabResp
     * @access public
     */
    public $FeCabResp = null;

    /**
     * @var FECAEADetResponse[] $FeDetResp
     * @access public
     */
    public $FeDetResp = null;

    /**
     * @var Evt[] $Events
     * @access public
     */
    public $Events = null;

    /**
     * @param Err[] $Errors
     * @param FECAEACabResponse $FeCabResp
     * @param FECAEADetResponse[] $FeDetResp
     * @param Evt[] $Events
     * @access public
     */
    public function __construct($Errors, $FeCabResp, $FeDetResp, $Events)
    {
      $this->Errors = $Errors;
      $this->FeCabResp = $FeCabResp;
      $this->FeDetResp = $FeDetResp;
      $this->Events = $Events;
    }

}
