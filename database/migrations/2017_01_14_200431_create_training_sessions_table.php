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
            $table->integer('training_type_id');
            $table->integer('training_place_id');
            $table->integer('session_stage_id');
            $table->timestamp('scheduled_date_time');
            $table->integer('created_by')->default(1);
            $table->timestamps();
            $table->boolean('available')->default(true);
        });

        Schema::table('training_sessions', function (Blueprint $table) {
            $table->foreign('training_type_id')->references('id')->on('training_types');
            $table->foreign('training_place_id')->references('id')->on('training_places');
            $table->foreign('session_stage_id')->references('id')->on('sessions_stages');
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
