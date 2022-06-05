<?php

namespace Database\Seeders;

use App\Models\Kamion;
use Illuminate\Database\Seeder;

class KamionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kamion::factory()->count(50)->create();
    }
}
