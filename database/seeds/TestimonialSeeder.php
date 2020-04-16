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
                'texte'=>"La technologie est l'ensemble des techniques et des moyens qui sert à maîtriser l'environement dans lequel on vit tout en le préservant pour les générations futures",
                'photo'=>'testimonial/1.png',
                'lien'=>'molengeek.com',
            ],
            [
                'nom'=>'Jean',
                'prenom'=>'Luc',
                'texte'=>"La technologie est l'ensemble des techniques et des moyens qui sert à maîtriser l'environement dans lequel on vit tout en le préservant pour les générations futures",
                'photo'=>'testimonial/2.png',
                'lien'=>'molengeek.com',
            ],
            [
                'nom'=>'Jean',
                'prenom'=>'Luc',
                'texte'=>"La technologie est l'ensemble des techniques et des moyens qui sert à maîtriser l'environement dans lequel on vit tout en le préservant pour les générations futures",
                'photo'=>'testimonial/3.png',
                'lien'=>'molengeek.com',
            ],
        ]);
    }
}
