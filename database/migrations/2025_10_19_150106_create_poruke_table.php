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
        Schema::create('poruke', function (Blueprint $table) {
            $table->id();
            $table->foreignId('posiljalac_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('primalac_id')->constrained('users')->onDelete('cascade');
            $table->text('tekst');
            $table->timestamp('datum')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poruke');
    }
};
