<?php

namespace App\Filament\Resources\RegisterActivityResource\Pages;

use App\Filament\Resources\RegisterActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegisterActivity extends EditRecord
{
    protected static string $resource = RegisterActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
