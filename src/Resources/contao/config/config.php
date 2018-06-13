<?php

use Contao\CoreBundle\ContaoCoreBundle;

$GLOBALS['BE_MOD']['content']['newsletter']['export'] = array('TestBundle\Test', 'exportRecipients');

array_insert($GLOBALS['BE_MOD'], 0, array(
	'computerworkstestbundle' => array(
		'coupon_products' => array(
			'tables' => 'tl_coupon_products'
        )
    )
));

if (TL_MODE == 'BE' && strlen($GLOBALS['BE_MOD']['content']['newsletter']['stylesheet'])) {
    $GLOBALS['TL_CSS'][] = 'bundles/computerworkstest/style.css';
}
