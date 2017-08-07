<?php

namespace hazzo\LaravelAfipWrapper;

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
    protected $tra;

    /**
     * Response to Login CMS method.
     *
     * @var string
     */
    protected $accessTicket;

    /**
     * AfipAuth constructor.
     * Get Ticket Request Access in XML/CMS/BASE64
     * @param $tra
     */
    function __construct($tra)
    {

        if (trim($tra) <> '') {

            // Make tra accessible by class
            $this->tra = $tra;

            // Use SoapClient methods
            $wsaa = new LoginCMSService();
            $ret = $wsaa->loginCms(new loginCms($tra));

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
