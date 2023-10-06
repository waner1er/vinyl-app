<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestPressingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testPressings = [
            [
                'title' => 'TP-5',
                'description' => '5 units of TP´s (including white labels and microtene inner sleeve, excluding delivery)',
                'price' => 24,
            ],
            [
                'title' => 'TP-10',
                'description' => '10 units of TP´s (including white labels and microtene inner sleeve, excluding delivery)',
                'price' => 48,
            ],
            [
                'title' => 'TP-EXPRESS-10',
                'description' => 'Express Delivery of tps up to 10 tps',
                'price' => 30,
            ],
        ];

        foreach ($testPressings as $testPressing) {
            \App\Models\TestPressing::create($testPressing);
        }
    }
}
