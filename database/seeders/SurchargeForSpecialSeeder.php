<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurchargeForSpecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $surchages_for_specials = [
            [
                'title' => 'SURCH_SPECIAL-12-01',
                'description' => 'Surcharge for silkscreen on vinyl record',
                'disc_size' => '12',
                '100_199' => 0.734,
                '200_249' => 0.612,
                '250_499' => 0.511,
                '500_999' => 0.388,
                '1000_1999' => 0.322,
                '2000_2999' => 0.295,
                '3000_4999' => 0.294,
                '5000_7499' => 0.293,
                '7500_9999' => 0.292,
                '10000_14999' => 0.291,
                '15000_19999' => 0.291,
                '20000_29999' => 0.290,
                '30000_49999' => 0.290,
                '50000_100000' => 0.289,
            ],
            // TODO : continuer seeder
        ];

        foreach ($surchages_for_specials as $surchage_for_special) {
            \App\Models\SurchargeForSpecial::create($surchage_for_special);
        }
    }
}
