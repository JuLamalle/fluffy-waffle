<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert(['name' => 'Euro']);
        DB::table('currencies')->insert(['name' => 'US Dollar']);
        DB::table('currencies')->insert(['name' => 'Swiss Franc']);
        DB::table('currencies')->insert(['name' => 'Japanese Yen']);
        DB::table('currencies')->insert(['name' => 'British Pound']);
        DB::table('currencies')->insert(['name' => 'Canadian Dollar']);
    }
}
