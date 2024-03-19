<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Localitie;
use Illuminate\Support\Facades\DB;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Empty the table first
        Localitie::truncate();

        // Define data
        $localities = [
            ['postal_code' => '1060', 'locality' => 'Saint-Gilles'],
            ['postal_code' => '1030', 'locality' => 'Schaerbeek'],
            ['postal_code' => '1050', 'locality' => 'Ixelles'],
        ];

        // Insert data in the table
        DB::table('localities')->insert($localities);
    }
}
