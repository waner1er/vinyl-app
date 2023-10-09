<?php

namespace App\Filament\Resources\PictureDiscResource\Pages;

use App\Filament\Resources\PictureDiscResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPictureDiscs extends ListRecords
{
    protected static string $resource = PictureDiscResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
