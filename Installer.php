<?php
/**
 * Installer functions hooked into Composer events.
 */

namespace WordPressKickstart;

use Composer\Installer\PackageEvent;

class Installer {
	/**
	 * Actions taken after any package has been installed.
	 */
	public static function postPackageInstall(PackageEvent $event) {
		$installedPackage = $event->getOperation()->getPackage();

		if ($installedPackage->getName() == 'wordpress') {
			self::cleanWordPressCore();
		}
	}

	/**
	 * Actions taken after any package has been updated.
	 */
	public static function postPackageUpdate(PackageEvent $event) {
		$updatedPackage = $event->getOperation()->getInitialPackage();

		if ($updatedPackage->getName() == 'wordpress') {
			self::cleanWordPressCore();
		}
	}

	/**
	 * Tidy up the core WordPress package.
	 */
	public static function cleanWordPressCore() {
		/**
		 * Remove the wp-content directory located inside the core package.
		 *
		 * Any files added to this directory will be wiped when the package is
		 * updated, so we shouldn’t use it. Instead, we use the wp-content directory
		 * in the document root to store our site content, themes and plugins.
		 */
		system("rm -rf wp/wp-content");
	}
}
