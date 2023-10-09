<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        $this->call(CuttingSeeder::class);
        $this->call(TestPressingSeeder::class);
        $this->call(BlackVinylSeeder::class);
        $this->call(ColorVinylrecordsSurchargeSeeder::class);
        $this->call(PictureDiscSeeder::class);
        $this->call(PrintLabelSeeder::class);
        $this->call(SurchargeForSpecialSeeder::class);

        $this->call(VinylCaseSeeder::class);
    }
}
