<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'card_value',
        'card_color',
        'effect',
    ];

    // Relation avec le jeu
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
