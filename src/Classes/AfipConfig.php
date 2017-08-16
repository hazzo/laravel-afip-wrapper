<?php

namespace hazzo\LaravelAfipWrapper\Classes;

use hazzo\LaravelAfipWrapper\Dependencies\LoginCmsProd\LoginCMSService;
use hazzo\LaravelAfipWrapper\Dependencies\LoginCmsDev\LoginCMSService as LoginCMSServiceDev;
use hazzo\LaravelAfipWrapper\Dependencies\LoginCmsProd\loginCms;
use hazzo\LaravelAfipWrapper\Dependencies\LoginCmsDev\loginCms as loginCmsDev;

class AfipConfig
{

    /**
     * AFIP selected config.
     *
     * @var array
     */
    public $config;

    /**
     * AFIP Web Service temporary folder.
     *
     * @var array
     */
    protected $tempFolder;

    /**
     * AFIP Login Service.
     *
     * @var array
     */
    protected $login;

    /**
     * AFIP Web Service environment URL.
     *
     * @var string
     */
    private $env;


    public function __construct()
    {
        if (function_exists('config_path')) {
            if (file_exists(config_path('afipWS.php'))) {
                $this->config = include(config_path('afipWs.php'));
            }
        } else {
            $this->config = include(__DIR__ . '/../config.php');
        }

        return $this;
    }

    /**
     * Get temporary folder to save files
     * @return array|mixed|string
     */
    public function folder() {
        // Set AFIP temp folder for xml validation files
        if(function_exists('base_path')) {
            $this->tempFolder = ((strlen($this->config['afipTempFolder']) > 0) ? $this->config['afipTempFolder'] : base_path() . '/temp/');
        } else {
            $this->tempFolder = ((strlen($this->config['afipTempFolder']) > 0) ? $this->config['afipTempFolder'] : $_SERVER['DOCUMENT_ROOT'] . '/temp/');
        }

        return $this->tempFolder;
    }

    /**
     * Get login service based on environment
     * @param $ltr
     * @return array
     */
    public function login($ltr) {
        // Set AFIP Web Service environment URL
        $this->env = $this->config['afipEnvironment'];

        $this->login['service'] = ($this->env === 'PROD') ? new LoginCMSService() : new LoginCMSServiceDev();
        $this->login['cms'] = ($this->env === 'PROD') ? new loginCms($ltr) : new loginCmsDev($ltr);

        return $this->login;
    }
}