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
        Schema::create('cour_etudiant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cour_id");
            $table->unsignedBigInteger("etudiant_id");
            $table->timestamps();



            $table->foreign('cour_id')->on('cours')->references('id')->onDelete('cascade');
            $table->foreign('etudiant_id')->on('etudiants')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_cours');
    }
};
