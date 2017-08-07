<?php

include_once('FECabResponse.php');

class FECAECabResponse extends FECabResponse
{

    /**
     * @param int $Cuit
     * @param int $PtoVta
     * @param int $CbteTipo
     * @param string $FchProceso
     * @param int $CantReg
     * @param string $Resultado
     * @param string $Reproceso
     * @access public
     */
    public function __construct($Cuit, $PtoVta, $CbteTipo, $FchProceso, $CantReg, $Resultado, $Reproceso)
    {
      parent::__construct($Cuit, $PtoVta, $CbteTipo, $FchProceso, $CantReg, $Resultado, $Reproceso);
    }

}
