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
        Schema::create('clothes_size', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clothes_id');
            $table->foreignId('size_id');
            $table->foreign('clothes_id')->references('id')->on('clothes');
            $table->foreign('size_id')->references('id')->on('size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes_size');
    }
};
