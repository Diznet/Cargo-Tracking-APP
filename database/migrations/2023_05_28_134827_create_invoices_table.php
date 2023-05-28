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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('sender_id')->constrained();
            $table->foreignId('recipient_id')->constrained();
            $table->unsignedBigInteger('departure_id');
            $table->unsignedBigInteger('current_id');
            $table->unsignedBigInteger('arrival_id');
            $table->foreign('departure_id')->references('id')->on('cities');
            $table->foreign('current_id')->references('id')->on('cities');
            $table->foreign('arrival_id')->references('id')->on('cities');
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
        Schema::dropIfExists('invoices');
    }
};
