<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contro__matchsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contro__matchs')->insert([
            'tid' => 'Default',
            'TeamA' => '',
            'TeamB' => '',
            'scoret1' => 0,
            'scoret2' => 0,
        ]);
    }
}
