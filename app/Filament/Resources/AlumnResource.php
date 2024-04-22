<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlumnResource\Pages;
use App\Filament\Resources\AlumnResource\RelationManagers;
use App\Models\Alumn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;


class AlumnResource extends Resource
{
    protected static ?string $model = Alumn::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Campos para alumnos
                Forms\Components\TextInput::make('enrollment')
                ->label('Enrollment')
                ->required(),
                Forms\Components\TextInput::make('grade')
                ->label('Grade')
                ->required(),
                Forms\Components\TextInput::make('group')
                ->label('Grupo')
                ->required(),
                Forms\Components\Select::make('user_id')->relationship('user', 'name')->searchable()->preload()->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            //
            TextColumn::make('enrollment'),
            TextColumn::make('grade'),
            TextColumn::make('group'),
            // Add text column for user_id
            TextColumn::make('user.name')
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
            'index' => Pages\ListAlumns::route('/'),
            'create' => Pages\CreateAlumn::route('/create'),
            'edit' => Pages\EditAlumn::route('/{record}/edit'),
        ];
    }
}
