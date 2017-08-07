<?php

class Err
{

    /**
     * @var int $Code
     * @access public
     */
    public $Code = null;

    /**
     * @var string $Msg
     * @access public
     */
    public $Msg = null;

    /**
     * @param int $Code
     * @param string $Msg
     * @access public
     */
    public function __construct($Code, $Msg)
    {
      $this->Code = $Code;
      $this->Msg = $Msg;
    }

}
