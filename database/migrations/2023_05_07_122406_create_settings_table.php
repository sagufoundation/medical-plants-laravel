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
        Schema::create('settings', function (Blueprint $table) {

            $table->id();

            // Site Information
            $table->string('site_title')->nullable();
            $table->text('site_description')->nullable();
            $table->text('welcome_text')->nullable();
            $table->text('copyright')->nullable();
            $table->text('meta_tags')->nullable();

            $table->string('logo')->nullable();
            $table->string('logo_loader')->nullable();
            $table->string('favicon')->nullable();

            // Social Media
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();

            // Contact
            $table->string('email_address')->nullable();
            $table->string('telp')->nullable();
            $table->string('office_address')->nullable();
            $table->text('google_map_embed')->nullable();

            // Dates
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
