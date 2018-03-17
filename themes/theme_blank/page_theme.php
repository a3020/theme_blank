<?php

namespace Concrete\Package\ThemeBlank\Theme\ThemeBlank;

use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;

class PageTheme extends Theme implements ThemeProviderInterface
{
    public function getThemeName()
    {
        return t('Theme Blank');
    }

    public function getThemeDescription()
    {
        return t('No styles, only one area.');
    }

    public function getThemeAreaLayoutPresets()
    {
        // TODO: Implement getThemeAreaLayoutPresets() method.
    }
}
