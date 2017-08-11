<?php

namespace hazzo\LaravelAfipWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class AfipWs extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return \hazzo\LaravelAfipWrapper\AfipWs::class; }

}