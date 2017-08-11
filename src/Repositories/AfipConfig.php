<?php

namespace hazzo\LaravelAfipWrapper\Repositories;


class AfipConfig
{

    /**
     * AFIP Web Service temporary folder.
     *
     * @var array
     */
    public $tempFolder;

    /**
     * AFIP Web Service environment URL.
     *
     * @var string
     */
    public $env;


    function __construct()
    {
        $config = [];

        if (function_exists('config_path')) {
            if (file_exists(config_path('afipWS.php'))) {
                $config = include(config_path('afipWs.php'));
            }
        } else {
            $config = include(__DIR__ . '/../config.php');
        }

        // Set AFIP Web Service environment URL
        if ($config['afipEnvironment'] === 'PROD') {
            $this->env = 'https://wsaa.afip.gov.ar/ws/services/LoginCms?wsdl';
        } elseif ($config['afipEnvironment'] === 'DEV') {
            $this->env = 'https://wsaahomo.afip.gov.ar/ws/services/LoginCms?wsdl';
        }

        // Set AFIP temp folder for xml validation files
        $this->tempFolder = $_SERVER['DOCUMENT_ROOT'] . ((strlen($config['afipTempFolder']) > 0) ? $config['afipTempFolder'] : '/temp/');

        return $this;
    }
}