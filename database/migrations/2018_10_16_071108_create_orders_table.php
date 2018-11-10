<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->string('quantity');
            $table->string('price');
            $table->string('orders');
            $table->string('store_type');
            $table->string('status');
            $table->string('assign_to');
            $table->string('customer_name');
            $table->string('address');
            $table->string('action');
            $table->string('tracking');
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
        Schema::dropIfExists('orders');
    }
}
