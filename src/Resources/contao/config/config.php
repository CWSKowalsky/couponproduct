<?php

use Contao\CoreBundle\ContaoCoreBundle;

$GLOBALS['BE_MOD']['content']['newsletter']['export'] = array('NewsletterExportBundle\NewsletterExport', 'exportRecipients');

if (TL_MODE == 'BE' && strlen($GLOBALS['BE_MOD']['content']['newsletter']['stylesheet'])) {
    $GLOBALS['TL_CSS'][] = 'bundles/lionelmnewsletterexport/style.css';
}
