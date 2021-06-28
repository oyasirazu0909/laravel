<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('thread_id');
            $table->string('name');
            $table->string('email');
            $table->longText('response');
            $table->string('password');
            $table->text('ip');
            $table->integer('sum_up');
            $table->integer('sum_down');
            $table->timestamps();
            
            // threadテーブルの外部キー
            $table->foreign('thread_id')
                ->references('id')
                ->on('thread')
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
        Schema::dropIfExists('response');
    }
}
