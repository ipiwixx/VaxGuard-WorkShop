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
        Schema::create('age', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vaccin_id');
            $table->integer('mois');

            $table->foreign('vaccin_id')->references('id')->on('vaccin');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('age');
    }
};
