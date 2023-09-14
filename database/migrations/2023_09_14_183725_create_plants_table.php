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
            $table->unsignedBigInteger('id_contributor')->nullable();
            $table->foreignId('id_province')->nullable();
            $table->string('slug');

            $table->string('cover_picture')->nullable();
            $table->string('gallery_picture')->nullable();

            $table->string('local_name');
            $table->string('indonesian_name');
            $table->string('latin_name');
            $table->string('taxonomists');

            $table->string('treatments');
            $table->string('traditional_usage');
            $table->string('known_phytochemical_consituents');

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
