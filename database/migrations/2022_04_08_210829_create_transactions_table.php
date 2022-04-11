<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreateTransactionsTable
|
|
|
|*/



class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('transactions', function(Blueprint $table) {
                $table->increments('id');
                $table->double('amount')->nullable();
                $table->string('currency')->nullable();
                $table->boolean('status')->nullable();
                $table->integer('user_id')->nullable();
                $table->integer('payment_gate_way')->nullable();
                $table->text('token');

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
        Schema::drop('transactions');
    }

     /* --Generated with ❤ by Slugger ---*/

}
