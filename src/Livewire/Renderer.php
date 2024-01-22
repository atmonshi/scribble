<?php

namespace Awcodes\Scribble\Livewire;

use Awcodes\Scribble\Helpers;
use Livewire\Component;

class Renderer extends Component
{
    public function getView(string $name, array $attrs)
    {
        foreach (Helpers::getActionClasses() as $block) {
            if ($block::getIdentifier() === $name) {
                return $block::getView($attrs);
            }
        }
    }

    public function render(): string
    {
        return <<<'HTML'
        <div id="scribble-renderer"></div>
        HTML;
    }
}
