# Laravel API Responses

[![License](https://poser.pugx.org/wboyz/laravel-api-responses/license)](https://packagist.org/packages/wboyz/laravel-api-responses)
[![Latest Stable Version](https://poser.pugx.org/wboyz/laravel-api-responses/v/stable)](https://packagist.org/packages/wboyz/laravel-api-responses)

This is a helper package based on the Laracasts Incremental APIs tutorial series for returning correctly formed json responses for API calls.

## Installation

Require this package with composer:

```
composer require wboyz/laravel-api-responses
```

After updating composer, add the ServiceProvider to the providers array in config/app.php:

### Laravel 5.x:

```php
WBoyz\LaravelApiResponses\WResponseServiceProvider::class,
```

If you want to use the facade, add this to your facades in app.php:

```php
'WResponse' => WBoyz\LaravelApiResponses\Facades\WResponse::class,
```

### Usage

You can return responses using the Facade (when added), using the supported methods:

```php
public function index() {
    return WResponse::respondNotFound('Not Found!');
}
```

You can now return responses using the global helper function wresponse:

```php
public function index() {
    return wresponse()->respondNotFound('Not Found!');
}
```
