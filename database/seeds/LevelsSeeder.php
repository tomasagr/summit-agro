<?php

use App\Levels;
use Illuminate\Database\Seeder;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Levels::create([
        	'name' => '1',
        	'code' => '01',
        	'points' => 1
        ]);

         Levels::create([
        	'name' => '2',
        	'code' => '02',
        	'points' => 1
        ]);

          Levels::create([
        	'name' => '3',
        	'code' => '03',
        	'points' => 1
        ]);

           Levels::create([
        	'name' => '4',
        	'code' => '04',
        	'points' => 1
        ]);
    }
}
