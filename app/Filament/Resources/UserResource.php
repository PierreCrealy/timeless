<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Filament\Resources\UserResource\RelationManagers\ReservationsRelationManager;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Common';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('firstname')
                    ->required(),
                Forms\Components\TextInput::make('lastname')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastname')
                    ->formatStateUsing(function ($state, User $user) {
                        return $user->getRoleNames()->first();
                    })
                    ->badge()
                    ->colors([
                        'danger' => static fn ($state, User $user): bool => $user->getRoleNames()->first() == "Customer",
                        'warning' => static fn ($state, User $user): bool => $user->getRoleNames()->first() == "Employee",
                        'info' => static fn ($state, User $user): bool => $user->getRoleNames()->first() == "Admin",
                    ])
                    ->searchable(),
                Tables\Columns\TextColumn::make('fidelity_pts')
                    ->numeric()
                    ->sortable()
                    ->badge()
                    ->colors([
                        'danger' => static fn ($state): bool => $state <= 25,
                        'warning' => static fn ($state): bool => $state > 25 && $state < 75,
                        'info' => static fn ($state): bool => $state >= 75,
                    ]),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d/m/Y H:i'),
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
            ReservationsRelationManager::class,
            RelationManagers\ServicesRelationManager::class,
            RelationManagers\RegistrationsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
