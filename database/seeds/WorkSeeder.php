<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            ['image'=>'works/1.jpg'],
            ['image'=>'works/2.jpg'],
            ['image'=>'works/3.jpg'],
            ['image'=>'works/4.jpg'],
            ['image'=>'works/5.jpg'],
            ['image'=>'works/6.jpg'],
            ['image'=>'works/7.jpg'],
            ['image'=>'works/8.jpg'],
        ]);
    }
}
