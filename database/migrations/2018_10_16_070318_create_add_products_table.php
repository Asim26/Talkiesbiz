<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('csv');
            $table->string('product_title');
            $table->string('main_image');
            $table->string('other_images');
            $table->string('main_category');
            $table->string('sub_category');
            $table->string('price');
            $table->string('sku');
            $table->string('quantity');
            $table->string('brand_name');
            $table->string('package_contains');
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
        Schema::dropIfExists('add_products');
    }
}
