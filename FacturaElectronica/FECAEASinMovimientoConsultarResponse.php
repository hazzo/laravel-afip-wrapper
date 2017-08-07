<?php

class FECAEASinMovimientoConsultarResponse
{

    /**
     * @var FECAEASinMovConsResponse $FECAEASinMovimientoConsultarResult
     * @access public
     */
    public $FECAEASinMovimientoConsultarResult = null;

    /**
     * @param FECAEASinMovConsResponse $FECAEASinMovimientoConsultarResult
     * @access public
     */
    public function __construct($FECAEASinMovimientoConsultarResult)
    {
      $this->FECAEASinMovimientoConsultarResult = $FECAEASinMovimientoConsultarResult;
    }

}
