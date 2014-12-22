# WordPress Kickstart

A starting point for managing a WordPress installation using [Composer](https://getcomposer.org/) and Git.

* Installs WordPress into its own subdirectory.
* Uses [WPackagist](http://wpackagist.org/) to manage plugins and themes.

## Installation

To install:

* Clone repo into your webroot.
* Update required information in composer.json, including package name, description, authors and license.
* Run `composer install`.
* Copy `wp-config-sample.php` to `wp-config.php` and edit database connection details.
* Install WordPress in your browser.

By default, this will also install some plugins that are useful during website development. To skip the installation of these plugins during install, use the `--no-dev` option:

```sh
$ composer install --no-dev
```

## Adding and removing plugins and themes

Simply make edits to the package list in `composer.json` and run the following command:

```sh
$ composer update
```

See [WPackagist](http://wpackagist.org/) for more information.
