<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TableResource\Pages;
use App\Filament\Resources\TableResource\RelationManagers;
use App\Filament\Resources\TableResource\RelationManagers\OrdersRelationManager;
use App\Models\Table;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table as Tabl;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TableResource extends Resource
{
    protected static ?string $model = Table::class;
    protected static ?string $navigationGroup = 'Restaurant';
    protected static ?string $navigationIcon = 'heroicon-c-viewfinder-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('capacity')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Tabl $table): Tabl
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('capacity')
                    ->numeric()
                    ->badge()
                    ->color('info')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                ->formatStateUsing(fn ($state) => match ((int) $state) {
                    0 => 'Indisponible',
                    1 => 'Disponible',
                    2 => 'En attente',
                    default => 'Inconnu',
                })
                    ->badge()
                    ->searchable()
                    ->colors([
                        'danger' => static fn ($state): bool => $state == 0,
                        'success' => static fn ($state): bool => $state == 1,
                        'warning' => static fn ($state): bool => $state == 2,
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            OrdersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTables::route('/'),
            'create' => Pages\CreateTable::route('/create'),
            'edit' => Pages\EditTable::route('/{record}/edit'),
        ];
    }
}
