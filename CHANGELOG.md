# Version 1.2.0

## Bugfixes

* None

## Features

* Added method hinting for several interfaces' common implementations
* Updated build process

# Version 1.1.0

## Bugfixes

* None

## Features

* Move Descriptor implementations from appserver-io/appserver to this package

# Version 1.0.0

## Bugfixes

* None

## Features

* Switched to stable dependencies due to version 1.0.0 release

# Version 0.8.1

## Bugfixes

* None

## Features

* Upgraded dependency of appserver-io-psr/http-message

# Version 0.8.0

## Bugfixes

* None

## Features

* Unified the interface naming conventions
* Moved to new documentation schema

# Version 0.7.0

## Bugfixes

* None

## Features

* Extended the HttpServletRequest interface to be more compliant with corresponding Java6 interface + new set- and getBaseModifier method

# Version 0.6.7

## Bugfixes

* None

## Features

* Pre-Initialize the Route annotation class initialization params and url mapping arrays

# Version 0.6.6

## Bugfixes

* None

## Features

* Add @Route annotation implementation for allow annotation based configuration for servlets

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
