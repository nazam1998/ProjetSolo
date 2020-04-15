<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'nom'=>'Jean',
                'prenom'=>'Luc',
                'texte'=>'Ce template est trop claqué au sol',
                'photo'=>'testimonial/1.png',
                'lien'=>'OnVaTousR.com',
            ],
            [
                'nom'=>'Jean',
                'prenom'=>'Luc',
                'texte'=>'Ce template est trop claqué au sol',
                'photo'=>'testimonial/2.png',
                'lien'=>'OnVaTousR.com',
            ],
            [
                'nom'=>'Jean',
                'prenom'=>'Luc',
                'texte'=>'Ce template est trop claqué au sol',
                'photo'=>'testimonial/3.png',
                'lien'=>'OnVaTousR.com',
            ],
        ]);
    }
}
