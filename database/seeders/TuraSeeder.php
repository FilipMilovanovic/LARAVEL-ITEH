<?php

namespace Database\Seeders;

use App\Models\Tura;
use Illuminate\Database\Seeder;

class TuraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tura::factory()->count(80)->create();
    }
}
