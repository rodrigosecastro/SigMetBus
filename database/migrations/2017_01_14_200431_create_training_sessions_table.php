<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_sessions', function (Blueprint $table) {
            $table->increments('id');
            //$table->foreign('training_type_id')->references('id')->on('training_types')->nullable();
            //$table->foreign('place_type_id')->references('id')->on('places_types')->nullable();
            $table->timestamp('date_time');
            $table->integer('created_by')->default(1);
            $table->timestamps();
            $table->boolean('available')->default(true);
        });

        Schema::table('training_sessions', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_sessions');
    }
}
