<?php

declare(strict_types=1);

namespace Heimseiten\ContaoShowCssInListsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Heimseiten\ContaoShowCssInListsBundle\HeimseitenContaoShowCssInListsBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(HeimseitenContaoShowCssInListsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
