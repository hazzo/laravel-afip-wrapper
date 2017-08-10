<?php

class FECompConsultaResponse
{

    /**
     * @var Err[] $Errors
     * @access public
     */
    public $Errors = null;

    /**
     * @var FECompConsResponse $ResultGet
     * @access public
     */
    public $ResultGet = null;

    /**
     * @var Evt[] $Events
     * @access public
     */
    public $Events = null;

    /**
     * @param Err[] $Errors
     * @param FECompConsResponse $ResultGet
     * @param Evt[] $Events
     * @access public
     */
    public function __construct($Errors, $ResultGet, $Events)
    {
      $this->Errors = $Errors;
      $this->ResultGet = $ResultGet;
      $this->Events = $Events;
    }

}
