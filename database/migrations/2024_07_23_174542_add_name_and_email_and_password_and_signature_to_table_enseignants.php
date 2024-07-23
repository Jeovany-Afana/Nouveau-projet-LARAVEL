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
        Schema::table('enseignants', function (Blueprint $table) {
            //
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telephone');
            $table->string('signature');
            $table->foreignId('fiche_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enseignants', function (Blueprint $table) {
            //
        });
    }
};
