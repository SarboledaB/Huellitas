<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Petitem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Petitem::factory(8)->create();
    }
}
