<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ReservationsRelationManager extends RelationManager
{
    protected static string $relationship = 'reservations';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('start_datetime')
            ->columns([
                Tables\Columns\TextColumn::make('start_datetime')
                    ->dateTime('d/m/Y H:i'),
                Tables\Columns\TextColumn::make('end_datetime')
                    ->dateTime('d/m/Y H:i'),
                Tables\Columns\TextColumn::make('rooms.name')
                    ->badge()
                    ->color('info'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
