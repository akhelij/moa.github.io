<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->text('content')->nullable();
          $table->text('place')->nullable();
          $table->integer('category_id');
          $table->integer('user_id');
          $table->string('type');
          $table->integer('best_comment_id')->nullable();
          $table->boolean('anonymous')->default(false);
          $table->timestamps();
          $table->datetime('deleted_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
