<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Agency;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencies')->insert([
            ['name' => 'musango'],
            ['name' => 'mondial'],
            ['name' => 'Diamond'],
        ]);
    }
}
