<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostVideoImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_video_img', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId', false, true)->length(1);
            $table->integer('sCommentId', false, true)->length(1);
            $table->string('sOriginalName', 15);
            $table->string('sMimeType', 10);
            $table->string('sPath', 10);
            $table->integer('delete', false, true)->length(1);
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
        Schema::dropIfExists('post_video_img');
    }
}
