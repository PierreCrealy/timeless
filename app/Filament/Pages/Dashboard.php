<?php

namespace App\Filament\Pages;

use Filament\Facades\Filament;
use Filament\Pages\Page;

class Dashboard extends \Filament\Pages\Dashboard
{
    public function getWidgets(): array
    {
        return Filament::getWidgets();
    }
}
