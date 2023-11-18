<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'Hamdy',
            'email' => 'hmdymgdy@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::query()->create([
            'name' => 'Sameh',
            'email' => 'sameh@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
