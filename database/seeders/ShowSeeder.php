<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Show;


class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Empty the table first
        Show::truncate();
        
        //Define data
        $datas = [
            [
                'slug' => 'le-voyage-du-heros',
                'title' => 'Le Voyage du Héros',
                'description' => 'Un voyage épique à travers des mondes fantastiques, où courage et amitié sont mis à l’épreuve.',
                'poster_url' => 'https://exemple.com/posters/le-voyage-du-heros.jpg',
            ],
            [
                'slug' => 'les-secrets-du-temps',
                'title' => 'Les Secrets du Temps',
                'description' => 'Une aventure captivante à la découverte des mystères du temps, mêlant science et magie.',
                'poster_url' => 'https://exemple.com/posters/les-secrets-du-temps.jpg',
            ],
            [
                'slug' => 'au-dela-des-etoiles',
                'title' => 'Au-delà des Étoiles',
                'description' => 'Un récit fascinant d’exploration spatiale, où l’humanité cherche sa place dans l’univers.',
                'poster_url' => 'https://exemple.com/posters/au-dela-des-etoiles.jpg',
            ],
        ];
        
        
        //Insert data in the table
        DB::table('shows')->insert($datas);

    }
}
