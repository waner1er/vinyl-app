<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CuttingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cuttings = [
            [
                'title' => 'CUTTING-7-001',
                'description' => '7" DMM cutting & galvanization (2 sides)',
                'disc_size' => '7',
                'price' => '171',
            ],
            [
                'title' => 'CUTTING-7-002',
                'description' => '7" lacquer processing & galvanization (2 sides)',
                'disc_size' => '7',
                'price' => '249',
            ],
            [
                'title' => 'CUTTING-10-001',
                'description' => '10" DMM - cutting & galvanization (2 sides)',
                'disc_size' => '10',
                'price' => '187',
            ],
            [
                'title' => 'CUTTING-10-002',
                'description' => '10" DMM - cutting & galvanization (1 side)',
                'disc_size' => '10',
                'price' => '139',
            ],
            [
                'title' => 'CUTTING-10-003',
                'description' => '10" lacquer processing & galvanization (2 sides)',
                'disc_size' => '10',
                'price' => '249',
            ],
            [
                'title' => 'CUTTING-10-004',
                'description' => '10" lacquer processing & galvanization (1 side)',
                'disc_size' => '10',
                'price' => '125',
            ],
            [
                'title' => 'CUTTING-12-001',
                'description' => '12" DMM - cutting & galvanization (2 sides)',
                'disc_size' => '12',
                'price' => '187',
            ],
            [
                'title' => 'CUTTING-12-002',
                'description' => '12" DMM - cutting & galvanization (1 side)',
                'disc_size' => '12',
                'price' => '139',
            ],
            [
                'title' => 'CUTTING-12-003',
                'description' => '12" lacquer processing & galvanization (2 sides)',
                'disc_size' => '12',
                'price' => '249',
            ],
            [
                'title' => 'CUTTING-12-004',
                'description' => '12" lacquer processing & galvanization (1 side)',
                'disc_size' => '12',
                'price' => '125',
            ],
        ];

        foreach ($cuttings as $cutting) {
            \App\Models\Cutting::create($cutting);
        }
    }
}
