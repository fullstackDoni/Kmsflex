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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('image');
            $table->string('directors');
            $table->text('actors');
            $table->string('year');
            $table->text('country');
            $table->text('video');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
