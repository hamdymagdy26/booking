<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seat::query()->create([
            'name' => 'SeatOne',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatTwo',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatThree',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatFour',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatFive',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatSix',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatSeven',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatEight',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatNine',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatTen',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatEleven',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatTwelve',
            'bus_id' => '1',
        ]);

        Seat::query()->create([
            'name' => 'SeatOne',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatTwo',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatThree',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatFour',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatFive',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatSix',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatSeven',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatEight',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatNine',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatTen',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatEleven',
            'bus_id' => '2',
        ]);

        Seat::query()->create([
            'name' => 'SeatTwelve',
            'bus_id' => '2',
        ]);
    }
}
