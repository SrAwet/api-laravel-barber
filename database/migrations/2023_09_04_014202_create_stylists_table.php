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
        Schema::create('stylists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_branch');
            $table->string('name');
            $table->timestamps();

            $table->foreign('id_branch')->references('id')->on('branches');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stylists');
    }
};
