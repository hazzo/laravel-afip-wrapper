<?php

class FECAEASinMovimientoInformarResponse
{

    /**
     * @var FECAEASinMovResponse $FECAEASinMovimientoInformarResult
     * @access public
     */
    public $FECAEASinMovimientoInformarResult = null;

    /**
     * @param FECAEASinMovResponse $FECAEASinMovimientoInformarResult
     * @access public
     */
    public function __construct($FECAEASinMovimientoInformarResult)
    {
      $this->FECAEASinMovimientoInformarResult = $FECAEASinMovimientoInformarResult;
    }

}
