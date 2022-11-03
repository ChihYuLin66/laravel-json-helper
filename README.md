# laravel-json

## introduction
I just want json encode/decode beautifully.

## install

Install the package via composer
```bash 
composer require chihyulin66/laravel-json-helper
```

Add Provider to `config/app.php`:
```php
'providers' => [
    /*
     * Package Service Providers...
     */
   ChihYuLin66\LaravelJsonHelper\JsonServiceProvider::class
]
```

Add the Facade in `config/app.php`:

```php
'aliases' => [
    // ...
    'Json' => ChihYuLin66\LaravelJsonHelper\JsonFacade::class,
]
```

## Usage

```php

// use
use ChihYuLin66\LaravelJsonHelper\Json;

$json = Json::encode($value);
$value = Json::decode($json);

// anywhere 
$json = app('json')->encode($value);
$value = app('json')->decode($json);
```

