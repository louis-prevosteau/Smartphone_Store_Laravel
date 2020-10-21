<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Smartphone;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Smartphone::factory(10)->create();
    }
}
