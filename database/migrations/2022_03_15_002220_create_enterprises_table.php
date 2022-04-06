<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreateEnterprisesTable
|
|
|
|*/



class CreateEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('enterprises', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->text('description')->nullable();
                $table->string('city')->nullable();
                $table->string('facebook')->nullable();
                $table->string('twitter')->nullable();
                $table->string('instagram')->nullable();
                $table->string('telephone')->nullable();
                $table->string('logo')->nullable();
                $table->string('website')->nullable();
                $table->integer('user_id')->nullable();
                $table->boolean('verified')->nullable();
                $table->string('lng')->nullable();
                $table->string('lat')->nullable();
                $table->boolean('enterprise_is_configured')->nullable();

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
        Schema::drop('enterprises');
    }

     /* --Generated with ❤ by Slugger ---*/

}
