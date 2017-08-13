<?php

namespace hazzo\LaravelAfipWrapper\Repositories;

use loginCms;
use LoginCMSService;
use SimpleXMLElement;


/**
 * Class AfipAuth
 * @package hazzo\LaravelAfipWrapper\AfipAuth
 */
class AfipAuth
{

    /**
     * Login Ticket Request XML/CMS/BASE64.
     *
     * @var string
     */
    protected $ltr;

    /**
     * Response to Login CMS method.
     *
     * @var string
     */
    protected $accessTicket;

    /**
     * Given CUIT.
     *
     * @var string
     */
    protected $cuit;

    /**
     * AfipAuth constructor.
     * Get Ticket Request Access in XML/CMS/BASE64
     * @param $ltr
     * @param array $options
     */
    function __construct($ltr, $options = array())
    {
        if (trim($ltr) <> '') {

            // Make tra accessible by class
            $this->tra = $ltr;

            // Get web service config
            $config = new AfipConfig();

            // Use SoapClient methods
            $wsaa = new LoginCMSService($options, $config->env);
            $ret = $wsaa->loginCms(new loginCms($ltr));

            // Response access ticket accessible for class
            $this->accessTicket = $ret->loginCmsReturn;

        } else {
            var_dump('Ticket Request Access error. Could not trim XML.');
        }
    }

    /**
     *
     * Trim XML response to get variables
     *
     */
    function trimResponse()
    {
        $ta = $this->accessTicket;
        $trimmedResponse = [];

        if (trim($ta) <> '') {
            $xml = new SimpleXMLElement($ta);
            foreach ($xml as $element) {
                foreach ($element as $key => $val) {
                    if ($key == 'source') {
                        $trimmedResponse['vSource'] = (String)$val;
                    }
                    if ($key == 'destination') {
                        $trimmedResponse['vDestination'] = (String)$val;
                    }
                    if ($key == 'uniqueId') {
                        $trimmedResponse['vUniqueID'] = (String)$val;
                    }
                    if ($key == 'generationTime') {
                        $trimmedResponse['vGenerationTime'] = (String)$val;
                    }
                    if ($key == 'expirationTime') {
                        $trimmedResponse['vExpirationTime'] = (String)$val;
                    }
                    if ($key == 'token') {
                        $trimmedResponse['vToken'] = (String)$val;
                    }
                    if ($key == 'sign') {
                        $trimmedResponse['vSign'] = (String)$val;
                    }
                }
            }

        } else {
            var_dump('Ticket Access error. Could no trim XML');
        }

        return $trimmedResponse;
    }

}
