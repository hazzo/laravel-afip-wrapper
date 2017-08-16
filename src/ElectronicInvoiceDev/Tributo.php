<?php

class Tributo
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
     * @var float $BaseImp
     * @access public
     */
    public $BaseImp = null;

    /**
     * @var float $Alic
     * @access public
     */
    public $Alic = null;

    /**
     * @var float $Importe
     * @access public
     */
    public $Importe = null;

    /**
     * @param int $Id
     * @param string $Desc
     * @param float $BaseImp
     * @param float $Alic
     * @param float $Importe
     * @access public
     */
    public function __construct($Id, $Desc, $BaseImp, $Alic, $Importe)
    {
      $this->Id = $Id;
      $this->Desc = $Desc;
      $this->BaseImp = $BaseImp;
      $this->Alic = $Alic;
      $this->Importe = $Importe;
    }

}
