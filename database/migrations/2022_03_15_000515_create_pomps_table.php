<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreatePompsTable
|
|
|
|*/



class CreatePompsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('pomps', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->integer('site_id')->nullable();
                $table->double('atmospheric_pression')->nullable();
                $table->double('temperature')->nullable();
                $table->string('lat')->nullable();
                $table->string('lng')->nullable();
                $table->boolean('status')->nullable();

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
        Schema::drop('pomps');
    }

     /* --Generated with ❤ by Slugger ---*/

}
