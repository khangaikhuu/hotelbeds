<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormCompletion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('formcompletion', function(Blueprint $table) {
            $table->increments('form_id');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('adults');
            $table->integer('children');
            $table->integer('room_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formcompletion');
    }
}
