# edna-laravel
![edna](https://im.mfms.ru/c52c4f386274641cff26.gif)

## Installation

You can install the package via composer:

```bash
composer require sayber/edna-laravel
```

* **Note**: This package requires PHP 7.4 so it can take full advantage of type casting in PHP.


## Integration

Add the provider and aliases to the configuration file app.php

###### providers
```php
'providers' => [
    //...
    Edna\EdnaApiProvider::class
]
```

###### aliases
```php
'aliases' => [
    //...
    'Edna' => Edna\EdnaApiFacade::class
]
```
