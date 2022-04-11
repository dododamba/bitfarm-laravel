<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreatePostsTable
|
|
|
|*/



class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('posts', function(Blueprint $table) {
                $table->increments('id');
                $table->text('content')->nullable();
                $table->integer('user_id')->nullable();

                $table->string('slug')->nullable();
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
        Schema::drop('posts');
    }

     /* --Generated with ❤ by Slugger ---*/

}
