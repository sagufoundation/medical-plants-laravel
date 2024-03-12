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
        Schema::create('tribes', function (Blueprint $table) {
            $table->id();

            $table->string('tribe_name');
            $table->string('tribe_slug');
            $table->string('tribe_coordinates')->nullable();

            $table->mediumText('description')->nullable();
            
            $table->enum('status',['Publish','Draft'])->default('Draft')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tribes');
    }
};
