<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->date('date');
            $table->integer('type_id');
            $table->integer('expected_no');
            $table->integer('actual_no')->nullable();
            $table->string('guestspeaker')->nullable();
            $table->float('eventbudget');
            $table->enum('status',['upcoming','on-going','done','cancelled','pending','approved'])->default('pending');
            $table->float('reg_fee');
            $table->integer('no_of_days');
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
        Schema::dropIfExists('events');
    }
}
