<?php

namespace App\Filament\Resources\ColorVinylRecordsSurchargeResource\Pages;

use App\Filament\Resources\ColorVinylRecordsSurchargeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditColorVinylRecordsSurcharge extends EditRecord
{
    protected static string $resource = ColorVinylRecordsSurchargeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
