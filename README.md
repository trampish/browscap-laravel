browscap-laravel
================
[![Build Status](https://travis-ci.org/trampish/browscap-laravel.svg?branch=master)](https://travis-ci.org/trampish/browscap-laravel)
[![Total Downloads](https://poser.pugx.org/trampish/browscap-laravel/downloads.png)](https://packagist.org/packages/trampish/browscap-laravel)
[![License](https://poser.pugx.org/trampish/browscap-laravel/license.png)](https://packagist.org/packages/trampish/browscap-laravel)

Browscap-PHP integration (Service Provider and Facade) for Laravel 4

Stable Version
--------------
v1.0.2

Installation
------------

Install by adding the following to the require block in composer.json:
```
"trampish/browscap-laravel": "1.0.*"
```

Then run `composer update`.

Then add the following in app/config/app.php to the service providers array:
```php
'trampish\Browscap\BrowscapServiceProvider',
```

And add to the aliases array the following:
```php
'Browscap' => 'trampish\Browscap\BrowscapFacade',
```
