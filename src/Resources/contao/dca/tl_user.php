<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addLegend('showCssInListsLegend', 'backend_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('viewIdAndCssInArticlesAndContentElements', 'showCssInListsLegend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_user')
    ->applyToPalette('login', 'tl_user')
    ->applyToPalette('admin', 'tl_user')
    ->applyToPalette('group', 'tl_user')
    ->applyToPalette('extend', 'tl_user')
    ->applyToPalette('custom', 'tl_user')
;

$GLOBALS['TL_DCA']['tl_user']['fields']['viewIdAndCssInArticlesAndContentElements'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_user']['viewIdAndCssInArticlesAndContentElements'],
    'inputType' => 'checkbox',
    'eval'      => ['tl_class' => 'w50 clr'],
    'sql'       => "char(1) NOT NULL default ''",
];
