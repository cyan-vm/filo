<?php

namespace App\Filament\Resources\AlumnResource\Pages;

use App\Filament\Resources\AlumnResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlumns extends ListRecords
{
    protected static string $resource = AlumnResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
