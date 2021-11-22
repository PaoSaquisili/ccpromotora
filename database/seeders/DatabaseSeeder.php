<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Project::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        // \App\Models\User::factory()->create();   
    }
}
