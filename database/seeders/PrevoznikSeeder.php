<?php

namespace Database\Seeders;

use App\Models\Prevoznik;
use Illuminate\Database\Seeder;

class PrevoznikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prevoznik::factory()->count(20)->create();
    }
}
