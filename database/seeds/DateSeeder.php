<?php

use Illuminate\Database\Seeder;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Date', 20)->create();
    }
}
