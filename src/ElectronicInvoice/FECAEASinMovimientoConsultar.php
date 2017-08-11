<?php

class FECAEASinMovimientoConsultar
{

    /**
     * @var FEAuthRequest $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @var string $CAEA
     * @access public
     */
    public $CAEA = null;

    /**
     * @var int $PtoVta
     * @access public
     */
    public $PtoVta = null;

    /**
     * @param FEAuthRequest $Auth
     * @param string $CAEA
     * @param int $PtoVta
     * @access public
     */
    public function __construct($Auth, $CAEA, $PtoVta)
    {
      $this->Auth = $Auth;
      $this->CAEA = $CAEA;
      $this->PtoVta = $PtoVta;
    }

}
