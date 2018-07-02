<?php

namespace SK\CouponProducts\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{

    public function getBundles(ParserInterface $parser)
    {
        return [
            (new BundleConfig('SK\CouponProducts\SKCouponProducts'))
                ->setReplace(['sk-couponproducts'])
                ->setLoadAfter(['LeadingSystems\MerconisBundle\LeadingSystemsMerconisBundle'])
        ];
    }
    
}
