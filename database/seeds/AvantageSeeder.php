<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avantages')->insert([
            'icone'=>'icon-user-md',
            'titre'=>'Hello world'
        ]);
    }
}
