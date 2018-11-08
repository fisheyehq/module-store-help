# Fisheye_StoreHelp

## Overview
A Magento 2 module that adds a 'store help' block to the site footer.

> Note: this module was created as an example to support the talk ['Level up your layout'](http://uk.magetitans.com/speakers/john-hughes/) presented at Mage Titans MCR 2018 to highlight use of view models.

## Features

* Adds a 'Store Help' block to the site footer which displays the store phone number, opening hours and a link to the contact form
    * Store Information is passed to block using a view model
* Allows admin control over block display and optional output of the store address
    * This is to highlight use of multiple view models within a single block

## Compatibility

* Magento Open Source / Commerce Edition 2.2.x
* Supports Magento 2 Full Page Cache (including Varnish)

## Installation

```
composer require fisheye/module-store-help
php bin/magento module:enable Fisheye_StoreHelp
php bin/magento setup:upgrade
```

## Contributing
Issues, forks and pull requests welcomed :)
