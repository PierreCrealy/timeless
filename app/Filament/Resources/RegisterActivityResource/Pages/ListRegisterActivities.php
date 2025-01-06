<?php

namespace App\Filament\Resources\RegisterActivityResource\Pages;

use App\Filament\Resources\RegisterActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegisterActivities extends ListRecords
{
    protected static string $resource = RegisterActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
