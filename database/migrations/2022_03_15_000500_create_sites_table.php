<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreateSitesTable
|
|
|
|*/



class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('sites', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->integer('region_id')->nullable();
                $table->double('area')->nullable();
                $table->string('areaUnity')->nullable();
                $table->string('lat')->nullable();
                $table->string('lng')->nullable();
                $table->string('description')->nullable();
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
        Schema::drop('sites');
    }

     /* --Generated with ❤ by Slugger ---*/

}
