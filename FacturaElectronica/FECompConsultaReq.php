<?php

class FECompConsultaReq
{

    /**
     * @var int $CbteTipo
     * @access public
     */
    public $CbteTipo = null;

    /**
     * @var int $CbteNro
     * @access public
     */
    public $CbteNro = null;

    /**
     * @var int $PtoVta
     * @access public
     */
    public $PtoVta = null;

    /**
     * @param int $CbteTipo
     * @param int $CbteNro
     * @param int $PtoVta
     * @access public
     */
    public function __construct($CbteTipo, $CbteNro, $PtoVta)
    {
      $this->CbteTipo = $CbteTipo;
      $this->CbteNro = $CbteNro;
      $this->PtoVta = $PtoVta;
    }

}
