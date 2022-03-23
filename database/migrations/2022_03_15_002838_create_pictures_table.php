<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreatePicturesTable
|
|
|
|*/



class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('pictures', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->text('url')->nullable();
                $table->string('alt')->nullable();
                $table->integer('owner')->nullable();
    
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
        Schema::drop('pictures');
    }

     /* --Generated with ❤ by Slugger ---*/

}
