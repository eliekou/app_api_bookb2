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
        Schema::create('reservations', function (Blueprint $table) {
            $table->string('id',100);
            $table->timestamps();
            $table->string('status')->nullable();
            $table->string('State');
            $table->string('source')->nullable();
            $table->datetime('StartUtc')->nullable();
            $table->datetime('EndUtc')->nullable();
            $table->datetime('cancelled_at')->nullable();
            $table->datetime('created_at_in_pms')->nullable();
            
            $table->string('user_id',100);
            $table->foreign('user_id')->references('id')->on('users');
            //$table->timestamps('updated_at');
            //$table->timestamps('deleted_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
