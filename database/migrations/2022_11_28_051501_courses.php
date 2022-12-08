<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table courses
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lectures_id');
            $table->string('courses_name');
            $table->integer('chapter');
            $table->integer('harga');
            $table->date('release');
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
        //
    }
};
