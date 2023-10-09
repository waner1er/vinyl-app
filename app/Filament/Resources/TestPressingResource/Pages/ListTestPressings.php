<?php

namespace App\Filament\Resources\TestPressingResource\Pages;

use App\Filament\Resources\TestPressingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestPressings extends ListRecords
{
    protected static string $resource = TestPressingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
