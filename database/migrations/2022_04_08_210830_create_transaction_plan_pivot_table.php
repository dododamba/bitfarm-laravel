<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionPlanPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_transaction', function (Blueprint $table) {
            $table->integer('transaction_id')->nullable();
            //$table->foreign('transaction_id')->references('id')->on('sites')->onDelete('cascade');
            $table->integer('plan_id')->nullable();
            //$table->foreign('plan_id')->references('id')->on('projects')->onDelete('cascade');
          //  $table->primary(['transaction_id', 'project_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plan_transaction');
    }
}
