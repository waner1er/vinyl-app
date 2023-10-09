<?php

namespace App\Filament\Resources\PictureDiscResource\Pages;

use App\Filament\Resources\PictureDiscResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPictureDisc extends EditRecord
{
    protected static string $resource = PictureDiscResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
