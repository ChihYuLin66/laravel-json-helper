# laravel-json


# install
if you want to register it yourself, add the ServiceProvider in `config/app.php`:
```php
'providers' => [
    /*
     * Package Service Providers...
     */
   ChihYuLin66\LaravelJsonHelper\JsonServiceProvider::class
]
```
If you want to add it manually, add the Facade in `config/app.php`:

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

