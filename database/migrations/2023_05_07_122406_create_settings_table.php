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
            $table->string('site_address')->nullable();
            $table->string('copyright')->nullable();

            $table->string('slug')->nullable();

            // Metas
            $table->text('meta_tags')->nullable();

            $table->string('logo')->nullable();
            $table->string('logo_loader')->nullable();
            $table->string('logo_meta')->nullable();
            $table->string('logo_favicon')->nullable();

            // Contact
            $table->string('office_address')->nullable();
            $table->string('email_address')->nullable();
            $table->string('telephone')->nullable();
            $table->mediumText('google_map_embed')->nullable();

            // Social Media
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();

            // dashboard
            $table->string('logo_dashboard_lg_dark')->nullable();
            $table->string('logo_dashboard_sm_dark')->nullable();
            $table->string('logo_dashboard_lg_light')->nullable();
            $table->string('logo_dashboard_sm_light')->nullable();

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
