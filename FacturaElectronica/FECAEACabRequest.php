<?php

include_once('FECabRequest.php');

class FECAEACabRequest extends FECabRequest
{

    /**
     * @param int $CantReg
     * @param int $PtoVta
     * @param int $CbteTipo
     * @access public
     */
    public function __construct($CantReg, $PtoVta, $CbteTipo)
    {
      parent::__construct($CantReg, $PtoVta, $CbteTipo);
    }

}
