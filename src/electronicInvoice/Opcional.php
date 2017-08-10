<?php

class Opcional
{

    /**
     * @var string $Id
     * @access public
     */
    public $Id = null;

    /**
     * @var string $Valor
     * @access public
     */
    public $Valor = null;

    /**
     * @param string $Id
     * @param string $Valor
     * @access public
     */
    public function __construct($Id, $Valor)
    {
      $this->Id = $Id;
      $this->Valor = $Valor;
    }

}
