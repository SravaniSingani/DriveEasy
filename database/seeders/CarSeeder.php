<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Car::factory()->create([
            'model' => 'Camry',
            'year' => '2022',
            'carImg' => 'https://cdn.jdpower.com/Models/640x480/2022-Toyota-Camry-TRDV6.jpg',
            'brand_id' => '1'
        ]);

        Car::factory()->create([
            'model' => 'HRV',
            'year' => '2023',
            'carImg' => 'https://www.iihs.org/cdn-cgi/image/width=636/api/ratings/model-year-images/3208/',
            'brand_id' => '2'
        ]);

        Car::factory()->create([
            'model' => 'X5',
            'year' => '2022',
            'carImg' => 'https://media.ed.edmunds-media.com/bmw/x5/2021/oem/2021_bmw_x5_4dr-suv_m50i_fq_oem_1_600.jpg',
            'brand_id' => '4'
        ]);

        Car::factory()->create([
            'model' => 'C Class',
            'year' => '2021',
            'carImg' => 'https://images.pistonheads.com/nimg/43794/20C0673_091.jpg',
            'brand_id' => '5'

        ]);

        Car::factory()->create([
            'model' => 'Escape',
            'year' => '2021',
            'carImg' => 'https://s3.amazonaws.com/s3images.edealer.ca/Pictures/2023-07/6732433/6733728/122292907.jpeg',
            'brand_id' => '3'
        ]);
    }

}
