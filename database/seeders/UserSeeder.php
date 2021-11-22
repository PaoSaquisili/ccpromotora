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
        User::create([
            "name" => "Sebastian Armijos",
            "email" => "sebas25211@hotmail.com",
            "password" => bcrypt("27108318c")
        ])->assignRole("Admin");
    }
}
