<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreatePlansTable
|
|
|
|*/



class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('plans', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->text('description')->nullable();
                $table->double('price')->nullable();
                $table->date('promotionStartDate')->nullable();
                $table->date('promotionDueDate')->nullable();
                $table->date('startDate')->nullable();
                $table->date('dueDate')->nullable();
                $table->double('promotionPrice')->nullable();
                $table->integer('project_id')->nullable();

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
        Schema::drop('plans');
    }

     /* --Generated with ❤ by Slugger ---*/

}
