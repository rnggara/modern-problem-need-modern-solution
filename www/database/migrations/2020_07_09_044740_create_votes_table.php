<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vote');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_thread')->nullable();
            $table->unsignedBigInteger('id_answer')->nullable();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_thread')->references('id')->on('threads')->onDelete('cascade');
            $table->foreign('id_answer')->references('id')->on('answers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
