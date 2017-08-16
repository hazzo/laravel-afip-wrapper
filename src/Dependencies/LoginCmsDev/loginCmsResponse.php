<?php

namespace hazzo\LaravelAfipWrapper\Dependencies\LoginCmsDev;

class loginCmsResponse
{

    /**
     * @var string $loginCmsReturn
     * @access public
     */
    public $loginCmsReturn = null;

    /**
     * @param string $loginCmsReturn
     * @access public
     */
    public function __construct($loginCmsReturn)
    {
      $this->loginCmsReturn = $loginCmsReturn;
    }

}
