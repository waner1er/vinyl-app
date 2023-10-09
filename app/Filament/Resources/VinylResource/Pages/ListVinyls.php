<?php

namespace App\Filament\Resources\VinylResource\Pages;

use App\Filament\Resources\VinylResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVinyls extends ListRecords
{
    protected static string $resource = VinylResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
