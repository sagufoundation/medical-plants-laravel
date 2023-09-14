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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('icon_id')->nullable();
            $table->string('tribes');
            $table->string('desc');
            $table->string('long');
            $table->string('lat');
            $table->string('link')->nullabel();
            $table->string('slug');
            $table->enum('status',['Publish','Draft'])->default('Draft')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('icon_id')->references('id')->on('icons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
