<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdermasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordermaster', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->string('price');
            $table->string('quantity');
            $table->string('imgurl');
            $table->string('buyeremail');
            $table->string('purchasedatetime');
            $table->string('address');
            $table->string('razorpaypaymentid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordermaster');
    }
}
