<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([Forms\Components\TextInput::make('name')->label('Name'),
            Forms\Components\TextInput::make('lastName')->label('Last Name'),
            Forms\Components\TextInput::make('maternalName')->label('Maternal Name')->nullable(),
            Forms\Components\Select::make('sex')->label('Sex')->options([
                '1' => 'Male',
                '2' => 'Female',
            ]),
            Forms\Components\TextInput::make('email')->label('Email'),
            Select::make('roles')->multiple()->relationship('roles', 'name'),
            Forms\Components\TextInput::make('password')->label('Password')->password(),
            Forms\Components\TextInput::make('profile_image')->label('Profile Image')->nullable(),
            // TextInput::make('name')->required(),
            // TextInput::make('email')->required(),
            // TextInput::make('password')->password()->hiddenOn('edit')->required(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            //
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
