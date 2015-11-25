<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OcobBowling20152016 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocob_Bowling', function (Blueprint $table) {
            $table->increments('id');
            $table->string('player');
            $table->integer('matches');
            $table->integer('innings');
            $table->integer('overs');
            $table->integer('maidens');
            $table->float('runs');
            $table->integer('wickets');
            $table->string('bbi');
            $table->integer('average');
            $table->float('econ');
            $table->integer('sr');
            $table->integer('fivefas');
            $table->integer('catches');
            $table->integer('most_wickets');
            $table->integer('least_runs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ocob_Bowling');
    }
}
