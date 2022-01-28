<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table){

            $table->bigIncrements('id');
            $table->unsignedBigInteger('from_id');
            $table->unsignedBigInteger('to_id');
            $table->text('content');
            $table->foreign('from_id', 'from')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('to_id', 'to')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->dateTime('read_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
