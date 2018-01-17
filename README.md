# WordPress Kickstart

A starting point for managing a WordPress installation using [Composer](https://getcomposer.org/) and Git.

* Installs WordPress into its own subdirectory.
* Uses [WPackagist](http://wpackagist.org/) to manage plugins and themes.

## Installation

To install:

1. Clone repo into your webroot.
2. Update required information in `composer.json`, including package name, description, authors and license.
3. Run following command to install packages: `composer install`
4. Copy `public/wp-config-sample.php` to `public/wp-config.php` and edit database connection details.
5. Set your host’s document root to the `public` directory.
6. Install WordPress in your browser.

By default, this will also install some plugins that are useful in website development. To skip the installation of these plugins, use the `--no-dev` option:

```sh
$ composer install --no-dev
```

## Adding and removing plugins and themes

Simply make edits to the package list in `composer.json` and run the following command:

```sh
$ composer update
```

See [WPackagist](http://wpackagist.org/) for more information.
