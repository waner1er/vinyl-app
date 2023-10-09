<?php

namespace Database\Seeders;

use App\Models\Vinyl;
use App\Models\Cutting;
use App\Models\BlackVinyl;
use App\Models\PrintLabel;
use App\Models\PictureDisc;
use App\Models\TestPressing;
use App\Models\VinylCase;
use Illuminate\Database\Seeder;
use App\Models\ColorVinylRecordsSurcharge;

class VinylCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VinylCase::create([
            'title' => 'toto',
            'size' => '7',
            'is_double' => false,
            'quantity' => '100_199',
            'cutting_price' => Cutting::where('id', '=',1)->get('price')->first()->price,
            'print_label_price' => PrintLabel::where('id', '=',1)->get('cent_deux_cent')->first()->cent_deux_cent,
            'test_pressing_price' => 12,

        ]);

    }
}
