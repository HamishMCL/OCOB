<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BowlingUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ocob_Bowling', function (Blueprint $table) {
            //
            $table->integer('most_wickets');
            $table->integer('least_runs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ocob_Bowling', function (Blueprint $table) {
            //
        });
    }
}
