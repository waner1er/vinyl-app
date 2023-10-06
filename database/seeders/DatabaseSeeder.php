<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CuttingSeeder;
use Database\Seeders\BlackVinylSeeder;
use Database\Seeders\PictureDiscSeeder;
use Database\Seeders\TestPressingSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        $this->call(CuttingSeeder::class);
        $this->call(TestPressingSeeder::class);
        $this->call(BlackVinylSeeder::class);
        $this->call(ColorVinylrecordsSurchargeSeeder::class);
        $this->call(PictureDiscSeeder::class);
    }
}