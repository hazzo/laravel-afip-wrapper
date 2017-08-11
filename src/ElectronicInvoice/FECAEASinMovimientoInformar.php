<?php

class FECAEASinMovimientoInformar
{

    /**
     * @var FEAuthRequest $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @var int $PtoVta
     * @access public
     */
    public $PtoVta = null;

    /**
     * @var string $CAEA
     * @access public
     */
    public $CAEA = null;

    /**
     * @param FEAuthRequest $Auth
     * @param int $PtoVta
     * @param string $CAEA
     * @access public
     */
    public function __construct($Auth, $PtoVta, $CAEA)
    {
      $this->Auth = $Auth;
      $this->PtoVta = $PtoVta;
      $this->CAEA = $CAEA;
    }

}
