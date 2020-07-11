<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_thread']);
            $table->dropForeign(['id_answer']);

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
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_thread']);
            $table->dropForeign(['id_answer']);

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_thread')->references('id')->on('threads');
            $table->foreign('id_answer')->references('id')->on('answers');
        });
    }
}
