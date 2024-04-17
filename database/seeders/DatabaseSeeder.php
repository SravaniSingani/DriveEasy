<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Car;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sravani',
            'email' => 'sravani@gmail.com',
            'password' => 'password'
        ]);

        $this->call(BrandSeeder::class);    
        $this->call(CarSeeder::class);  
    }
}
