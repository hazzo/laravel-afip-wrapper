<?php

class Cotizacion
{

    /**
     * @var string $MonId
     * @access public
     */
    public $MonId = null;

    /**
     * @var float $MonCotiz
     * @access public
     */
    public $MonCotiz = null;

    /**
     * @var string $FchCotiz
     * @access public
     */
    public $FchCotiz = null;

    /**
     * @param string $MonId
     * @param float $MonCotiz
     * @param string $FchCotiz
     * @access public
     */
    public function __construct($MonId, $MonCotiz, $FchCotiz)
    {
      $this->MonId = $MonId;
      $this->MonCotiz = $MonCotiz;
      $this->FchCotiz = $FchCotiz;
    }

}
