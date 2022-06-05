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
        $PS = new PrevoznikSeeder();
        $PS->run();

        $KS = new KamionSeeder();
        $KS->run();

        $TS = new TuraSeeder();
        $TS->run();
    }
}
