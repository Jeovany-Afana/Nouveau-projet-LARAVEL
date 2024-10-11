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
            // Ajouter la colonne cahier_id
            $table->unsignedBigInteger('cahier_id')->nullable();
        
            // Définir la contrainte de clé étrangère
            $table->foreign('cahier_id')->references('id')->on('cahiers')->onDelete('cascade');
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
