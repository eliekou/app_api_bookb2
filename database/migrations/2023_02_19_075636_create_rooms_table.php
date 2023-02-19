<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('number');
            $table->integer('floor');
            $table->string('reserved');


            /*$table->unsignedBigInteger('reservations_id');
            $table->foreign('reservations_id')->references('id')->on('reservations');*/
            //$table->foreignId('reservation_id')->constrained('reservations');


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
