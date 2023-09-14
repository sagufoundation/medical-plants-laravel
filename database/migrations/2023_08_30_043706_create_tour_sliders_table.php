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
        Schema::create('tour_sliders', function (Blueprint $table) {

            $table->id();

            $table->bigInteger('user_id')->unsigned();

            $table->string('title')->nullable();
            $table->string('slug')->nullable();

            $table->string('description')->nullable();
            $table->string('picture')->nullable();

            $table->enum('status',['Publish','Draft']);

            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_sliders');
    }
};
