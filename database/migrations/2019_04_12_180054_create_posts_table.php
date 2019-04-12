<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{

    /**
     * Set foreign indexes
     */
    private function setForeignIndexes($key, $table_name, $table, $on_delete) {
      $table->foreign($key)->references('id')
            ->on($table_name)->onDelete($on_delete);
    }

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
          $table->text('description');
          $table->integer('creator_id')->unsigned(); 
          $table->timestamps();
          $table->softDeletes();
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
