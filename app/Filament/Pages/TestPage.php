<?php

namespace App\Filament\Pages;

use App\Models\Vinyl;
use Filament\Pages\Page;
use App\Models\BlackVinyl;

class TestPage extends Page
{
    public $tests;
    public $black_vinyl;

    public function mount()
    {
        $this->tests = Vinyl::all();
        $this->black_vinyl = BlackVinyl::first();
    }
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test-page';

}
