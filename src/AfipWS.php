<?php
namespace hazzo\LaravelAfipWrapper;

Class AfipWs {

    /**
     * AfipWs constructor.
     * @param $tra
     */
    function __construct($tra)
    {
        $auth = new AfipAuth($tra);
        $auth->trimResponse();
    }

}