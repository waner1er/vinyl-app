<?php

namespace App\Filament\Resources\PrintLabelResource\Pages;

use App\Filament\Resources\PrintLabelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrintLabel extends EditRecord
{
    protected static string $resource = PrintLabelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
