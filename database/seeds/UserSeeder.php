<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Nazam',
            'email'=>'nazam@email.com',
            'password'=>Hash::make('nazam@email.com'),
            'role_id'=>1
        ]);
    }
}
