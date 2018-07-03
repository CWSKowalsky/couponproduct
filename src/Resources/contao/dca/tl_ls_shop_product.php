<?php
    $GLOBALS['TL_DCA']['tl_ls_shop_product']['palettes']['default'] = str_replace
    (
        'lsShopProductDetailsTemplate',
        'lsShopProductDetailsTemplate;{productcouponext},minimumOrderAmount',
        $GLOBALS['TL_DCA']['tl_ls_shop_product']['palettes']['default']
    );

    $GLOBALS['TL_DCA']['tl_ls_shop_product']['fields']['minimumOrderAmount'] = array
    (
        'label'			=>	&$GLOBALS['TL_LANG']['tl_ls_shop_product']['minimumOrderAmount'],
		'exclude' => true,
		'inputType'		=>	'text',
		'eval'			=>	array('rgxp' => 'number', 'tl_class' => 'w50', 'mandatory' => true),
		'sorting' => true
    );

?>