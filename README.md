# dot-controller-plugin-authentication

Authentication controller plugin.

![OSS Lifecycle](https://img.shields.io/osslifecycle/dotkernel/dot-controller-plugin-authentication)
[![GitHub license](https://img.shields.io/github/license/dotkernel/dot-controller-plugin-authentication)](https://github.com/dotkernel/dot-controller-plugin-authentication/blob/2.0.3/LICENSE.md)
![PHP from Packagist (specify version)](https://img.shields.io/packagist/php-v/dotkernel/dot-controller-plugin-authentication/2.9.0)

# NOTE

> **dot-controller-plugin-authentication** is in **maintenance** mode.

> This package is considered feature-complete, and is now in **security-only** maintenance mode.

## Installation

Run the following command
```bash
$ composer require dotkernel/dot-controller-plugin-authentication
```

This will also install package `dotkernel/dot-controller` and `dotkernel/dot-authentication` as dependencies
Enable the module by merging the `ConfiProvider` output to your application's configuration, to register the services defined by this module.

## Usage

In any controller, you can access this plugin by calling
```php
$this->authentication()->...
```

This plugin defines 2 methods you can use in your controllers to check for the currently authenticated identity.
```php
$this->authentication()->hasIdentity()
```
Returns a boolean value indicating if there is an authenticated identity or a guest identity

```php
$this->authentication()->getIdentity()
```
Returns the current identity as an hydrated object, as defined in the authentication module
