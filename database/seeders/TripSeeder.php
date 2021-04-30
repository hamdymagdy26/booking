<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::query()->create([
            'from' => '1',
            'to' => '2',
            'bus_id' => '1',
        ]);

        Trip::query()->create([
            'from' => '1',
            'to' => '3',
            'bus_id' => '1',
        ]);

        Trip::query()->create([
            'from' => '1',
            'to' => '4',
            'bus_id' => '1',
        ]);

        Trip::query()->create([
            'from' => '2',
            'to' => '3',
            'bus_id' => '1',
        ]);

        Trip::query()->create([
            'from' => '2',
            'to' => '4',
            'bus_id' => '1',
        ]);

        Trip::query()->create([
            'from' => '3',
            'to' => '4',
            'bus_id' => '1',
        ]);

        Trip::query()->create([
            'from' => '3',
            'to' => '4',
            'bus_id' => '1',
        ]);
    }
}
