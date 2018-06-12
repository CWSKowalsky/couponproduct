<?php

namespace ComputerWorks\TestBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{

    public function getBundles(ParserInterface $parser)
    {
        return [
            (new BundleConfig('ComputerWorks\TestBundle\ComputerWorksTestBundle'))
                ->setReplace(['cw-testbundle'])
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
        ];
    }
    
}
