<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_location')->nullable();
            $table->unsignedBigInteger('id_regency')->nullable();
            $table->unsignedBigInteger('id_contributor')->nullable();
            $table->unsignedBigInteger('id_tribe')->nullable();
            $table->foreignId('id_province')->nullable();
            $table->string('slug');

            // pictures
            $table->string('cover_picture')->nullable();
            $table->string('gallery_picture')->nullable();

            $table->string('image_cover')->default('sample/seed/image_cover.jpg')->nullable();
            $table->string('image_daun')->default('sample/seed/image_daun.jpg')->nullable();
            $table->string('image_buah')->default('sample/seed/image_buah.jpg')->nullable();
            $table->string('image_pohon')->default('sample/seed/image_pohon.jpg')->nullable();
            $table->string('image_bunga')->default('sample/seed/image_bunga.jpg')->nullable();
            $table->string('image_batang')->default('sample/seed/image_batang.jpg')->nullable();
            $table->string('image_keseluruhan')->default('sample/seed/image_keseluruhan.jpg')->nullable();

            $table->string('local_name');
            $table->string('indonesian_name')->nullable();
            $table->string('latin_name')->nullable();
            $table->string('taxonomists')->nullable();

            $table->string('treatments')->nullable();
            $table->string('traditional_usage')->nullable();
            $table->string('known_phytochemical_consituents')->nullable();

            $table->enum('status',['Publish','Draft'])->default('Draft')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_location')->references('id')->on('locations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_contributor')->references('id')->on('contributors')->onUpdate('cascade')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants');
    }
};
