<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('website');
            $table->string('phone');
            $table->string('birthplace');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->text('description');
            $table->string('occupation');
            $table->string('status');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->text('picture');
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
