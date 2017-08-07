<?php

class AlicIva
{

    /**
     * @var int $Id
     * @access public
     */
    public $Id = null;

    /**
     * @var float $BaseImp
     * @access public
     */
    public $BaseImp = null;

    /**
     * @var float $Importe
     * @access public
     */
    public $Importe = null;

    /**
     * @param int $Id
     * @param float $BaseImp
     * @param float $Importe
     * @access public
     */
    public function __construct($Id, $BaseImp, $Importe)
    {
      $this->Id = $Id;
      $this->BaseImp = $BaseImp;
      $this->Importe = $Importe;
    }

}
