<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoneBuyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('done_buy_products', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id');
            $table->integer('farmer_id');

            $table->string('name');
            $table->integer('numberBox');
            $table->integer('boxLoad');
            $table->float('priceBox');
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
        Schema::dropIfExists('done_buy_products');
    }
}
