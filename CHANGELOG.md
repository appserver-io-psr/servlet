# Version 0.6.5

## Bugfixes

* None

## Features

* Update constant IDENTIFIER to use short class name instead of fully qualified one

# Version 0.6.4

## Bugfixes

* None

## Features

* Replace HttpSessionWrapper with simple wrapper implementation => move original implementation to TechDivision_ServletEngine

# Version 0.6.3

## Bugfixes

* Replace PHP 5.4 incompatible ServletContext::class usage in ServletContext
* Remove compser.lock/composer.lock from tracking

## Features

* None

# Version 0.6.2

## Bugfixes

* None

## Features

* Add HttpServletResponse::setStatusCode() method to interface
* Add composer dependency in techdivision/application package

# Version 0.6.1

## Bugfixes

* None

## Features

* Refactoring ANT PHPUnit execution process
* Composer integration by optimizing folder structure (move bootstrap.php + phpunit.xml.dist => phpunit.xml)
* Switch to new appserver-io/build build- and deployment environment