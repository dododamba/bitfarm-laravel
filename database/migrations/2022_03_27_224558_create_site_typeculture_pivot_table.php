<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiteTypeculturePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_type_culture', function (Blueprint $table) {
            $table->integer('site_id')->unsigned()->index();
            //$table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');
            $table->integer('type_culture_id')->unsigned()->index();
            //$table->foreign('type_culture_id')->references('id')->on('typecultures')->onDelete('cascade');
          //  $table->primary(['site_id', 'type_culture_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('site_type_culture');
    }
}
