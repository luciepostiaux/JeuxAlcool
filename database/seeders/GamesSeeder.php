<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tableau contenant les noms des jeux
        $gameNames = [
            'Fuck the Queen',
            'La Suite',
            'La Suite qui Pue',
            'Jeu de la Mort',
            'Le Dispersé',
            'Les Petits Chevaux',
            'Pyramide',
            'La Route',
            'Rouge ou Noir',
            'Dé à deviner',
            'Dé correspondant',
            'La Route Losange',
            'Le 30',
            'Collecte ta couleur',
            'Le Classique',
            'Le Basique',
            'Le Bingo',
            'Serpent et Échelle',
            'Le H et Petit Train',
        ];

        // Boucle pour insérer chaque jeu en base de données
        foreach ($gameNames as $name) {
            Game::create(['name' => $name]);
        }
    }
}
