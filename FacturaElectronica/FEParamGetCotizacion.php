<?php

class FEParamGetCotizacion
{

    /**
     * @var FEAuthRequest $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @var string $MonId
     * @access public
     */
    public $MonId = null;

    /**
     * @param FEAuthRequest $Auth
     * @param string $MonId
     * @access public
     */
    public function __construct($Auth, $MonId)
    {
      $this->Auth = $Auth;
      $this->MonId = $MonId;
    }

}
