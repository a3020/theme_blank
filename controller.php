<?php

namespace Concrete\Package\ThemeBlank;

use Package;
use PageTheme;

class Controller extends Package
{
    protected $pkgHandle = 'theme_blank';
    protected $appVersionRequired = '8.0';
    protected $pkgVersion = '0.9.0';

    public function getPackageName()
    {
        return t('Blank');
    }

    public function getPackageDescription()
    {
        return t('A theme with, well, with nothing.');
    }

    public function install()
    {
        $pkg = parent::install();

        PageTheme::add('theme_blank', $pkg);
    }
}
