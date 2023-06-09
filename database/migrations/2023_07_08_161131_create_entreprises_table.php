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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nom');
            $table->string('telephone');
            $table->string('responsable');
            $table->string('domaine');
            $table->string('description')->nullable();
            $table->string('telephone2')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('quartier_id');
            $table->unsignedBigInteger('ville_id');
            $table->unsignedBigInteger('domaine_id');
            $table->string('adresse')->nullable();
            $table->string('whatsapp')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('ville_id')
            ->references('id')
            ->on('villes')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('quartier_id')
            ->references('id')
            ->on('quartiers')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('domaine_id')
            ->references('id')
            ->on('domaines')
            ->onDelete('restrict')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
