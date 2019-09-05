<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('slug');
            $table->string('title');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('type_id');
            $table->integer('expected_no');
            $table->integer('actual_no')->nullable();
            $table->string('guestspeaker')->nullable();
            $table->float('eventbudget')->nullable();
            $table->enum('status',['upcoming','on-going','done','cancelled','pending','approved'])->default('pending');
            $table->float('reg_fee')->nullable();
            $table->integer('no_of_days');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('admin_events');
    }
}
