<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips_experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('experience_id');
            $table->bigInteger('trip_id');
            $table->foreign('experience_id')->references('id')->on('experiences');
            $table->foreign('trip_id')->references('id')->on('trips');
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
        Schema::dropIfExists('trips_experiences');
    }
}
