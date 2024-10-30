<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GameController extends Controller
{
    public function index()
    {
        // Récupère tous les jeux depuis la base de données (nom uniquement)
        $games = Game::all(['name']);

        return Inertia::render('Rules', [
            'games' => $games,
        ]);
    }

    public function showRules($name)
    {
        // Récupère les règles du jeu depuis la configuration en utilisant le nom du jeu
        $gameRules = config("games.$name");

        if (!$gameRules) {
            abort(404, "Jeu non trouvé");
        }

        $gameRules['name'] = $name;

        return response()->json($gameRules);
    }
}
