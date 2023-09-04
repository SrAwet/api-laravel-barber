<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_stylist');
            $table->unsignedBigInteger('id_branch');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_services');
            $table->integer('day_of_week');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->timestamps();

            $table->foreign('id_stylist')->references('id')->on('stylists');
            $table->foreign('id_branch')->references('id')->on('branches');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_services')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
