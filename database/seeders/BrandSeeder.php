<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Brand::factory()->create([
            'brandName' => 'Toyota',
            'brandImg' => 'https://i.pinimg.com/originals/6e/71/6a/6e716a45a2b0df62254eec8db36ccc78.jpg'
        ]);

        Brand::factory()->create([
            'brandName' => 'Honda',
            'brandImg' => 'https://i.pinimg.com/originals/7f/3a/fb/7f3afb88712a75ef397ae98968a72a1c.jpg'
        ]);

        Brand::factory()->create([
            'brandName' => 'Ford',
            'brandImg' => 'https://i.pinimg.com/originals/3e/78/e1/3e78e1ca04f265d864615fe5948970bb.jpg'
        ]);

        Brand::factory()->create([
            'brandName' => 'BMW',
            'brandImg' => 'https://e0.pxfuel.com/wallpapers/964/399/desktop-wallpaper-bmw-logos-bmw-car-symbol-black-and-white.jpg'
        ]);

        Brand::factory()->create([
            'brandName' => 'Mercedes Benz',
            'brandImg' => 'https://i.pinimg.com/originals/b9/2b/f1/b92bf19612e524ac1f9d5e998770eba7.jpg'
        ]);
    }
}
