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
        Schema::create('pregledi', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datum');
            $table->text('opis')->nullable();
            $table->foreignId('ljubimac_id')->constrained('ljubimci')->onDelete('cascade');
            $table->foreignId('veterinar_id')->constrained('veterinari')->onDelete('cascade');
            $table->foreignId('korisnik_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregledi');
    }
};
