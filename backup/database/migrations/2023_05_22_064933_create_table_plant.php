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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_location')->nullable();
            $table->foreignId('id_contributor')->nullable();
            $table->foreignId('id_province')->nullable();
            
            $table->string('cover_picture')->nullable();
            $table->string('gallery_picture')->nullable();

            $table->string('local_name');
            $table->string('indonesian_name');
            $table->string('latin_name');
            $table->string('taxonomists');
            
            $table->string('treatments');
            $table->string('traditional_usage');
            $table->string('known_phytochemical_consituents');
            
            $table->string('status');
            $table->string('slug_plant');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
