<?php

namespace Awcodes\Scribble\Tools;

use Awcodes\Pounce\Enums\MaxWidth;
use Awcodes\Scribble\ScribbleTool;
use Awcodes\Scribble\Tools\Concerns\InteractsWithMedia;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\BaseFileUpload;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Hero extends ScribbleTool
{
    use InteractsWithMedia;

    protected static string $icon = 'heroicon-o-cube';

    protected static string $label = 'Hero';

    protected static bool $shouldShowInSuggestionMenu = true;

    public ?string $statePath = null;

    public static function getType(): string
    {
        return static::COMMAND;
    }

    public static function getCommand(): ?string
    {
        return 'toggleHero';
    }
}