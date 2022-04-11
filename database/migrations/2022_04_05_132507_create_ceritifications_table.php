<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreateCeritificationsTable
|
|
|
|*/



class CreateCeritificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('ceritifications', function(Blueprint $table) {
                $table->increments('id');
                $table->string('document')->nullable();
                $table->boolean('status')->nullable();
                $table->date('certified_at')->nullable();
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
        Schema::drop('ceritifications');
    }

     /* --Generated with ❤ by Slugger ---*/

}
