<?php

/**
 * Newsletter export
 * CSV export button for newsletter recipients.
 *
 * @author    John Brand, http://www.brandbrilliance.co.za
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   newsletterExport
 * @license   LGPL-3.0-or-later
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'ComputerWorks',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'Merconis\Core\ls_shop_cartX' => 'vendor/computerworks/couponproducts/src/Resources/contao/classes/ls_shop_cartX.php',
));
