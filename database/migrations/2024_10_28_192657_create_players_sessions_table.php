<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('players_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('session_code')->unique(); // Code de session unique
            $table->foreignId('game_id')->constrained()->onDelete('cascade'); // Référence à `games`
            $table->foreignId('host_id')->constrained('users')->onDelete('cascade'); // Référence à l'utilisateur hôte
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players_sessions');
    }
}
