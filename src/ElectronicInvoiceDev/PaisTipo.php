<?php

class PaisTipo
{

    /**
     * @var int $Id
     * @access public
     */
    public $Id = null;

    /**
     * @var string $Desc
     * @access public
     */
    public $Desc = null;

    /**
     * @param int $Id
     * @param string $Desc
     * @access public
     */
    public function __construct($Id, $Desc)
    {
      $this->Id = $Id;
      $this->Desc = $Desc;
    }

}
