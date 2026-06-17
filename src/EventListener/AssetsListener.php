<?php

declare(strict_types=1);

namespace Heimseiten\ContaoShowCssInListsBundle\EventListener;

use Contao\BackendTemplate;
use Contao\BackendUser;
use Contao\Controller;
use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\Template;
use Symfony\Bundle\SecurityBundle\Security;

/**
 * Loads the stylesheet/script that renders the CSS id/class pills, but only for
 * back end users who enabled the feature in their profile.
 */
#[AsHook('parseTemplate')]
final class AssetsListener
{
    public function __construct(
        private readonly Security $security,
        private readonly ContaoFramework $contaoFramework,
    ) {
    }

    public function __invoke(Template $template): void
    {
        if (!$template instanceof BackendTemplate) {
            return;
        }

        if ('be_main' !== $template->getName() && !str_starts_with($template->getName(), 'be_main_')) {
            return;
        }

        $user = $this->security->getUser();

        if (!$user instanceof BackendUser || !(bool) $user->viewIdAndCssInArticlesAndContentElements) {
            return;
        }

        /** @var Template $templateAdapter */
        $templateAdapter = $this->contaoFramework->getAdapter(Template::class);

        /** @var Controller $controllerAdapter */
        $controllerAdapter = $this->contaoFramework->getAdapter(Controller::class);

        $base = 'bundles/heimseitencontaoshowcssinlists/';

        $template->stylesheets .= $templateAdapter->generateStyleTag($controllerAdapter->addStaticUrlTo($base.'show-css-in-lists.css'), null, null);
        $template->javascripts .= $templateAdapter->generateScriptTag($controllerAdapter->addStaticUrlTo($base.'page-css-classes.js'), false, null, null, 'defer');
    }
}
