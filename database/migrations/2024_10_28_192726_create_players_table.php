<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')->constrained('players_sessions')->onDelete('cascade'); // Référence à `players_sessions`
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Référence à l'utilisateur (si authentifié)
            $table->string('player_name')->nullable(); // Nom du joueur si non authentifié
            $table->boolean('is_host')->default(false); // Indicateur si le joueur est l'hôte
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}
