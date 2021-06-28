<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('board_id');
            $table->text('thread');
            $table->string('password');
            $table->text('ip');
            $table->integer('sum_up');
            $table->integer('sum_down');
            $table->timestamps();
            
            // boardテーブルの外部キー
            $table->foreign('board_id')
                ->references('id')
                ->on('board')
                ->onDerete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thread');
    }
}
