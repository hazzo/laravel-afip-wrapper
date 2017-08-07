<?php

class FECAEASinMov
{

    /**
     * @var string $CAEA
     * @access public
     */
    public $CAEA = null;

    /**
     * @var string $FchProceso
     * @access public
     */
    public $FchProceso = null;

    /**
     * @var int $PtoVta
     * @access public
     */
    public $PtoVta = null;

    /**
     * @param string $CAEA
     * @param string $FchProceso
     * @param int $PtoVta
     * @access public
     */
    public function __construct($CAEA, $FchProceso, $PtoVta)
    {
      $this->CAEA = $CAEA;
      $this->FchProceso = $FchProceso;
      $this->PtoVta = $PtoVta;
    }

}
