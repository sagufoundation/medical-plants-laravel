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
        Schema::create('tour_packages', function (Blueprint $table) {

            $table->id();

            $table->string('title')->nullable();
            $table->string('slug')->nullable();

            $table->text('description')->nullable();
            $table->mediumText('body')->nullable();

            $table->string('picture')->nullable();

            $table->enum('status',['Publish','Draft']);

            $table->bigInteger('user_id')->unsigned();
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
        Schema::dropIfExists('tour_packages');
    }
};
