<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cleint;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Cleint::truncate();
        // \App\Models\User::factory(10)->create();
        Cleint::factory(10)->create();

    }
}
