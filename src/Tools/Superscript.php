<?php

namespace Awcodes\Scribble\Tools;

use Awcodes\Scribble\ScribbleTool;

class Superscript extends ScribbleTool
{
    protected static string $icon = 'scribble-superscript';

    protected static string $label = 'Superscript';

    protected static bool $shouldShowInBubbleMenu = true;

    public static function getCommand(): ?string
    {
        return 'toggleSuperscript';
    }
}