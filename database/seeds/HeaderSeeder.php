<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                'image1'=>'slides/camera/slide1/img1.jpg',
                'image2'=>'slides/camera/slide1/screen.png',
                'titre'=>'Hello World',
                'description'=>'I love to eat fish',
                
            ],
            [
                'image1'=>'slides/camera/slide2/img1.jpg',
                'image2'=>'slides/camera/slide2/iMac.png',
                'titre'=>'Hello World',
                'description'=>'I love to eat fish',
            ],
            [
                'image1'=>'slides/camera/slide2/img1.jpg',
                'image2'=>'slides/camera/slide3/browsers.png',
                'titre'=>'Hello World',
                'description'=>'I love to eat fish',
            ],
        ]);
    }
}
