<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'user_id',
        'player_name',
        'is_host',
    ];

    // Relation avec la session de jeu
    public function session()
    {
        return $this->belongsTo(PlayerSession::class);
    }

    // Relation avec l'utilisateur si le joueur est connecté
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
