<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
| Migration class   CreateUsersTable
|
|
|
|*/



class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('users', function(Blueprint $table) {
                $table->increments('id');
                $table->string('firstName')->nullable();
                $table->string('lastName')->nullable();
                $table->string('avatar')->nullable();
                $table->date('birth')->nullable();
                $table->string('country_id')->nullable();
                $table->string('email')->nullable();
                $table->string('password')->nullable();
                $table->string('telephone')->nullable();
                $table->string('slug')->nullable();
                $table->boolean('status')->nullable();
                $table->string('enterprise_id')->nullable();

                $table->string('confirm_token')->nullable();
                $table->string('reset_token')->nullable();
                $table->boolean('account_is_configured')->nullable();
                $table->timestamp('email_verified_at')->nullable();
                $table->rememberToken();

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
        Schema::drop('users');
    }

     /* --Generated with ❤ by Slugger ---*/

}
