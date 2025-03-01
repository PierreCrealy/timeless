<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FloorResource\Pages;
use App\Filament\Resources\FloorResource\RelationManagers;
use App\Models\Floor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FloorResource extends Resource
{
    protected static ?string $model = Floor::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Hotel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number')
                    ->integer()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\Select::make('theme_id')
                    ->relationship('theme', 'title')
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('theme.title')
                    ->badge()
                    ->sortable(),
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
            RelationManagers\RoomsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFloors::route('/'),
            'create' => Pages\CreateFloor::route('/create'),
            'edit' => Pages\EditFloor::route('/{record}/edit'),
        ];
    }
}
