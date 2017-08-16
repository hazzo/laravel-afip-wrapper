<?php

class DummyResponse
{

    /**
     * @var string $AppServer
     * @access public
     */
    public $AppServer = null;

    /**
     * @var string $DbServer
     * @access public
     */
    public $DbServer = null;

    /**
     * @var string $AuthServer
     * @access public
     */
    public $AuthServer = null;

    /**
     * @param string $AppServer
     * @param string $DbServer
     * @param string $AuthServer
     * @access public
     */
    public function __construct($AppServer, $DbServer, $AuthServer)
    {
      $this->AppServer = $AppServer;
      $this->DbServer = $DbServer;
      $this->AuthServer = $AuthServer;
    }

}
