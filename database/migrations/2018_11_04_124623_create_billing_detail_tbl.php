<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingDetailTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name');
            $table->string('town_city');
            $table->string('street_address');
            $table->string('postcode_zip');
            $table->string('state_country');
            $table->string('phone');
            $table->string('email_address');
            $table->string('credit_card_no');
            $table->string('card_type');
            $table->string('expiry');
            $table->string('cvv');
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
        Schema::dropIfExists('billing_detail');
    }
}
