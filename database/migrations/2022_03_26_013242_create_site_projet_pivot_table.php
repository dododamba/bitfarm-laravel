<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiteProjetPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_site', function (Blueprint $table) {
            $table->integer('site_id')->unsigned()->index();
            //$table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');
            $table->integer('project_id')->unsigned()->index();
            //$table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
          //  $table->primary(['site_id', 'project_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_site');
    }
}
