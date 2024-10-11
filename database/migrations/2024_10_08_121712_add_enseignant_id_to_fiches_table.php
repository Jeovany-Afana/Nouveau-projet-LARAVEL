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
        Schema::table('fiches', function (Blueprint $table) {
            
                // Ajouter la colonne enseignant_id
                $table->unsignedBigInteger('enseignant_id')->nullable(); // facultatif, selon si tu veux que l'association soit obligatoire ou non
                
                // Définir la contrainte de clé étrangère
                $table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fiches', function (Blueprint $table) {
            //
        });
    }
};
