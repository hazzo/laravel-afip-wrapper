<?php

include_once('FECAEASinMov.php');

class FECAEASinMovResponse extends FECAEASinMov
{

    /**
     * @var string $Resultado
     * @access public
     */
    public $Resultado = null;

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
     * @param string $CAEA
     * @param string $FchProceso
     * @param int $PtoVta
     * @param string $Resultado
     * @param Err[] $Errors
     * @param Evt[] $Events
     * @access public
     */
    public function __construct($CAEA, $FchProceso, $PtoVta, $Resultado, $Errors, $Events)
    {
      parent::__construct($CAEA, $FchProceso, $PtoVta);
      $this->Resultado = $Resultado;
      $this->Errors = $Errors;
      $this->Events = $Events;
    }

}
