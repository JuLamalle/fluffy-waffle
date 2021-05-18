<?php

use Illuminate\Database\Seeder;

class RatiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ratios')->insert(['currency_from_id' => '1', 'currency_to_id' => '2', 'ratio' => '1.3764']);
      DB::table('ratios')->insert(['currency_from_id' => '1', 'currency_to_id' => '3', 'ratio' => '1.2079']);
      DB::table('ratios')->insert(['currency_from_id' => '1', 'currency_to_id' => '5', 'ratio' => '0.8731']);
      DB::table('ratios')->insert(['currency_from_id' => '2', 'currency_to_id' => '4', 'ratio' => '76.7200']);
      DB::table('ratios')->insert(['currency_from_id' => '3', 'currency_to_id' => '5', 'ratio' => '1.1379']);
      DB::table('ratios')->insert(['currency_from_id' => '5', 'currency_to_id' => '6', 'ratio' => '1.5648']);
      // now we enter the inverse relation
      DB::table('ratios')->insert(['currency_from_id' => '2', 'currency_to_id' => '1', 'ratio' => '0.7265']);
      DB::table('ratios')->insert(['currency_from_id' => '3', 'currency_to_id' => '1', 'ratio' => '0.8279']);
      DB::table('ratios')->insert(['currency_from_id' => '5', 'currency_to_id' => '1', 'ratio' => '1.1453']);
      DB::table('ratios')->insert(['currency_from_id' => '4', 'currency_to_id' => '2', 'ratio' => '0.0130']);
      DB::table('ratios')->insert(['currency_from_id' => '5', 'currency_to_id' => '3', 'ratio' => '0.8788']);
      DB::table('ratios')->insert(['currency_from_id' => '6', 'currency_to_id' => '5', 'ratio' => '0.6390']);
    }
}
