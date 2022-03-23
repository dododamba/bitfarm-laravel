<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreateProjectsTable
|
|
|
|*/



class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('projects', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->text('description')->nullable();
                $table->string('device')->nullable();
                $table->date('dueDate')->nullable();
                $table->double('estimatedBudget')->nullable();
                $table->double('realBudget')->nullable();
                $table->date('startDate')->nullable();
                $table->integer('enterprise_id')->nullable();

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
        Schema::drop('projects');
    }

     /* --Generated with ❤ by Slugger ---*/

}
