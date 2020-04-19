<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistermailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registermails')->insert([
            'msg'=>'Bonjour, Vous vous êtes inscrits avec l\'adresse mail suivante : [email]'
        ]);
    }
}
