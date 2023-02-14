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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('text',255);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('video_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('comments',function (Blueprint $table){
           $table->dropForeign('comments_user_id_foreign');
        });
        Schema::table('comments',function (Blueprint $table){
            $table->dropForeign('comments_video_id_foreign');
        });
        Schema::dropIfExists('comments');
    }
};
