<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OcobBatting20152016 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocob_batting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('player');
            $table->integer('matches');
            $table->integer('innings');
            $table->integer('no');
            $table->integer('runs');
            $table->float('average');
            $table->integer('highest_score');
            $table->integer('hunds');
            $table->integer('fiftys');
            $table->integer('ducks');
            $table->integer('fours');
            $table->integer('sixs');
            $table->integer('outs');
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
        Schema::drop('ocob_batting');
    }
}
