<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCriterePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critere_post', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('post_id')->nullable();
          $table->integer('comment_id')->nullable();
          $table->integer('critere_id');
          $table->double('note');
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
        Schema::dropIfExists('critere_post');
    }
}
