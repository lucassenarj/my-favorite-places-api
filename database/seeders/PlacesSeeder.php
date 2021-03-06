<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Places;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Places::factory(200)->create();
    }
}
