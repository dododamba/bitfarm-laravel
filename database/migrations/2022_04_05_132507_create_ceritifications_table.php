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
                $table->string('document');
$table->boolean('status');
$table->date('certified_at');
$table->integer('user_id');

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
