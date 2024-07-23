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
        Schema::create('cahiers', function (Blueprint $table) {
            $table->id();
            $table->enum('niveau',['1','2','3','Master']);
            $table->enum('filiere',['INFORMATIQUE', 'TRANSPORT LOGISTIQUE','GESTION', 'AGRO-BUSINESS', 'DROIT'])->default('INFORMATIQUE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cahiers');
    }
};
