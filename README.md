# WordPress Kickstart

A starting point for managing a WordPress installation using Composer and Git.

* Installs WordPress into its own subdirectory.
* Uses [WPackagist](http://wpackagist.org/) to manage plugins.

To install:

* Clone repo into your webroot.
* Update required information in composer.json, including any WP plugin dependencies.
* Run `composer install`.
* Copy wp-config-sample.php to wp-config.php and enter in DB connection details.
* Install WordPress.
