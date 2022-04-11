<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreateLikesTable
|
|
|
|*/



class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('likes', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->nullable();
                $table->integer('post_id')->nullable();
                $table->integer('comment_id')->nullable();

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
        Schema::drop('likes');
    }

     /* --Generated with ❤ by Slugger ---*/

}
