<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polls', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->integer('max_voters')->nullable();
            $table->boolean('visibility');
            $table->boolean('notify_me');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('candidates');
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
        Schema::dropIfExists('polls');
    }
}
