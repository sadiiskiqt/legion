<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myprofile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId', false, true)->length(1);
            $table->string('day', false, true)->length(15);
            $table->string('month', 15);
            $table->string('year', false, true)->length(20);
            $table->string('gender', 10);
            $table->text('myProfileComment', false, true)->length(500);
            $table->string('sImageName');
            $table->string('sMimeType', 10);
            $table->string('sPathProfile',50);
            $table->string('category', false, true)->length(50);
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
        Schema::dropIfExists('myprofile');
    }
}
