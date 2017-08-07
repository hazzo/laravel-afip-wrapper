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
    protected $access_ticket;

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
            $this->access_ticket = $ret->loginCmsReturn;

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
        $ta = $this->access_ticket;
        $trimmed_response = [];

        if (trim($ta) <> '') {
            $xml = new SimpleXMLElement($ta);
            foreach ($xml as $element) {
                foreach ($element as $key => $val) {
                    if ($key == 'source') {
                        $trimmed_response['vSource'] = (String)$val;
                    }
                    if ($key == 'destination') {
                        $trimmed_response['vDestination'] = (String)$val;
                    }
                    if ($key == 'uniqueId') {
                        $trimmed_response['vUniqueID'] = (String)$val;
                    }
                    if ($key == 'generationTime') {
                        $trimmed_response['vGenerationTime'] = (String)$val;
                    }
                    if ($key == 'expirationTime') {
                        $trimmed_response['vExpirationTime'] = (String)$val;
                    }
                    if ($key == 'token') {
                        $trimmed_response['$vToken'] = (String)$val;
                    }
                    if ($key == 'sign') {
                        $trimmed_response['vSign'] = (String)$val;
                    }
                }
            }

            var_dump($trimmed_response);

        } else {
            var_dump('Ticket Access error. Could no trim XML');
        }
    }

}
