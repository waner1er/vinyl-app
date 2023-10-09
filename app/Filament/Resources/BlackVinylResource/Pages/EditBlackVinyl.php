<?php

namespace App\Filament\Resources\BlackVinylResource\Pages;

use App\Filament\Resources\BlackVinylResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlackVinyl extends EditRecord
{
    protected static string $resource = BlackVinylResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
