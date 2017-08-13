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
    
Publish the package configuration file.

```
php artisan vendor:publish
```

### Configuration

Config file options:

| Option            | Default      | Values     |
| :---------------      | :-------  | :--------- |
|  `afipTempFolder`     |  '' (Automatically the package will choose */temp* as folder in root directory)    | Any string. No need to get full root, package attaches global variable `$_SERVER['DOCUMENT_ROOT']` |
|  `afipEnvironment`    | '' (Automatically the package will choose *DEV* environment) | To options `DEV` or `PROD`, for homologation and production endpoints for AFIP Web Service. |

##  Usage samples
