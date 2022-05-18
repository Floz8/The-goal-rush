<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('plats_id');
            $table->foreign('home_team')->references('id')->on('teams');
            $table->foreign('away_team')->references('id')->on('teams');
            $table->integer('score_home_team');
            $table->integer('score_away_team');
            $table->float("home_team_rating");
            $table->float("away_team_rating");
            $table->float("draft_rating");
            $table->integer("result");
            $table->date("date");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parties');
    }
};
