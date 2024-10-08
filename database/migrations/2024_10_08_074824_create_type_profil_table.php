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
        Schema::create('type_profil', function (Blueprint $table) {
            $table->id();
            $table->string('label');

        });

        Schema::table('users', function (Blueprint $table) {
            // Ajouter la colonne type_profil_id dans users
            $table->unsignedBigInteger('type_profil_id')->nullable();

            // Créer la clé étrangère vers la table type_profil
            $table->foreign('type_profil_id')->references('id')->on('type_profil')
                  ->onDelete('set null'); // ou 'cascade', selon ce que tu préfères
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Supprimer la clé étrangère et la colonne type_profil_id de la table users
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['type_profil_id']);
            $table->dropColumn('type_profil_id');
        });
        
        Schema::dropIfExists('type_profil');
    }
};
