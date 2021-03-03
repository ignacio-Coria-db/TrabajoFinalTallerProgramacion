<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        
        //ejecuto los seeder
        $this->call(GeneroTableSeeder::class);

        $this->call(ActoresTableSeeder::class);

        $this->call(DirectoresTableSeeder::class);

    }
}
