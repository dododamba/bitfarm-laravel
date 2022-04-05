<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreateCountriesTable
|
|
|
|*/



class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('countries', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('iso')->nullable();
                $table->integer('indicatif')->nullable();
                $table->integer('country_id')->nullable();

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
        Schema::drop('countries');
    }

     /* --Generated with ❤ by Slugger ---*/

}
