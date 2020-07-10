<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCascadedeleteToVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('votes', function (Blueprint $table) {
            $table->dropForeign(['id_thread']);
            $table->dropForeign(['id_answer']);
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
        Schema::table('votes', function (Blueprint $table) {
            $table->dropForeign(['id_thread']);
            $table->dropForeign(['id_answer']);
            $table->foreign('id_thread')->references('id')->on('threads');
            $table->foreign('id_answer')->references('id')->on('answers');
        });
    }
}
