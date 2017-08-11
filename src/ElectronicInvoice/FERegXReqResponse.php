<?php

class FERegXReqResponse
{

    /**
     * @var int $RegXReq
     * @access public
     */
    public $RegXReq = null;

    /**
     * @var Err[] $Errors
     * @access public
     */
    public $Errors = null;

    /**
     * @var Evt[] $Events
     * @access public
     */
    public $Events = null;

    /**
     * @param int $RegXReq
     * @param Err[] $Errors
     * @param Evt[] $Events
     * @access public
     */
    public function __construct($RegXReq, $Errors, $Events)
    {
      $this->RegXReq = $RegXReq;
      $this->Errors = $Errors;
      $this->Events = $Events;
    }

}
