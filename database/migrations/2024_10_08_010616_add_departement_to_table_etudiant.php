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
        Schema::table('responsables', function (Blueprint $table) {
            //
            $table->enum('departement', ['ESITEC', 'MERCURE']);
            $table->removeColumn('signature');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('responsables', function (Blueprint $table) {
            //
        });
    }
};
