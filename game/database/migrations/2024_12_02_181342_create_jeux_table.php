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
        Schema::create('jeux', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('image', 1024);
            $table->string('image_gameplay1', 1024)->nullable()->default(null);
            $table->string('image_gameplay2', 1024)->nullable()->default(null);
            $table->string('image_gameplay3', 1024)->nullable()->default(null);
            $table->string('video', 1024);
            $table->string('lien',1024);
            $table->integer('nb_download');
            $table->date('date_sortie');
            $table->foreignId('genres_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeux');
    }
};
