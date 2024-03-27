<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Localitie; // Assurez-vous que le nom du modèle est correct
use Illuminate\Support\Facades\DB;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Désactivez les vérifications de contrainte de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Videz la table
        Localitie::truncate(); // Utilisez ici le bon nom de modèle

        // Réactivez les vérifications de contrainte de clé étrangère
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // Définissez les données
        $localities = [
            ['postal_code' => '1060', 'locality' => 'Saint-Gilles'],
            ['postal_code' => '1030', 'locality' => 'Schaerbeek'],
            ['postal_code' => '1050', 'locality' => 'Ixelles'],
        ];

        // Insérez les données dans la table
        DB::table('localities')->insert($localities);
    }
}
