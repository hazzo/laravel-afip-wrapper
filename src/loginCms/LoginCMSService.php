<?php

include_once('loginCms.php');
include_once('loginCmsResponse.php');
include_once('LoginFault.php');

class LoginCMSService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'loginCms' => '\loginCms',
      'loginCmsResponse' => '\loginCmsResponse',
      'LoginFault' => '\LoginFault');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://wsaahomo.afip.gov.ar/ws/services/LoginCms?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param loginCms $parameters
     * @access public
     * @return loginCmsResponse
     */
    public function loginCms(loginCms $parameters)
    {
      return $this->__soapCall('loginCms', array($parameters));
    }

}
