<?php

namespace App\Filament\Resources\AlumnResource\Pages;

use App\Filament\Resources\AlumnResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlumn extends EditRecord
{
    protected static string $resource = AlumnResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
