<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
| Migration class   CreateCommentsTable
|
|
|
|*/



class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('comments', function(Blueprint $table) {
                $table->increments('id');
                $table->text('content');
$table->integer('user_id');
$table->integer('post_id');

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
        Schema::drop('comments');
    }

     /* --Generated with ❤ by Slugger ---*/

}
