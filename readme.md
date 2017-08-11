# Laravel AFIP Web Service Wrapper

AFIP technical documentation for their Web Service [AFIP Web Service](http://www.afip.gob.ar/ws/paso4.asp?noalert=1)


## Installation

Type in your terminal:

```
composer require hazzo/LaravelAfipWrapper
```

Register AfipWrapper by adding it to the service providers on the `app.php`.
```
'providers' => array(
        ...
        hazzo\LaravelAfipWrapper\Providers\AfipWsServiceProvider::class
    )
```

Let's add the facade in the bottom of the same file in aliases.
```
'aliases' => array(
        ...
        'AfipWS' => hazzo\LaravelAfipWrapper\Facades\AfipWs::class,
    )
```
    
Publish the package's configuration file to the application's own config directory

```
php artisan vendor:publish --provider="Edujugon\Laradoo\Providers\OdooServiceProvider" --tag="config"
```

### Configuration

After publishing the package config file, the base configuration for laradoo package is located in config/laradoo.php


Also, you can dynamically update those values calling the available setter methods:

`host($url)`, `username($username)`, `password($password)`, `db($name)`, `apiSuffix($name)`


##  Usage samples
