<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_loans', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id');

            $table->integer('amountLoan');
            $table->string('currency');
            $table->integer('ownership');
            $table->integer('nationality');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmer_loans');
    }
}
