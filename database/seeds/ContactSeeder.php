<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'nom'=>'Nazam',
            'adresse'=>'Rue Eloy, 96',
            'ville'=>'Bruxelles, 1070',
            'phone'=>'+32 492 80 18 58',
            'email'=>'nazam98-be@email.com',
        ]);
    }
}
