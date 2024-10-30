<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_code',
        'game_id',
        'host_id',
    ];

    // Relation avec le jeu
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    // Relation avec les joueurs de la session
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
