<?php

class FEDummyResponse
{

    /**
     * @var DummyResponse $FEDummyResult
     * @access public
     */
    public $FEDummyResult = null;

    /**
     * @param DummyResponse $FEDummyResult
     * @access public
     */
    public function __construct($FEDummyResult)
    {
      $this->FEDummyResult = $FEDummyResult;
    }

}
