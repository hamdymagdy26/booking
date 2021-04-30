<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::query()->create([
            'name' => 'Cairo',
        ]);

        City::query()->create([
            'name' => 'Giza',
        ]);

        City::query()->create([
            'name' => 'AlFayyum',
        ]);

        City::query()->create([
            'name' => 'AlMinya',
        ]);

        City::query()->create([
            'name' => 'Asyut',
        ]);
    }
}
