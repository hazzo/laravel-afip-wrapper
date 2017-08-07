<?php

class CbteTipoResponse
{

    /**
     * @var CbteTipo[] $ResultGet
     * @access public
     */
    public $ResultGet = null;

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
     * @param CbteTipo[] $ResultGet
     * @param Err[] $Errors
     * @param Evt[] $Events
     * @access public
     */
    public function __construct($ResultGet, $Errors, $Events)
    {
      $this->ResultGet = $ResultGet;
      $this->Errors = $Errors;
      $this->Events = $Events;
    }

}
