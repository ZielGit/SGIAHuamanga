<?php

namespace Database\Seeders;

use App\Models\User;
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

        //llamando al seeder
        //comando para ejecutar fresh y el seeder
        //php artisan migrate:fresh --seed
        $this->call(PersonalSeeder::class);
    }
}
