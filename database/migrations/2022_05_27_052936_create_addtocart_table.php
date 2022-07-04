<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddtocartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addtocart', function (Blueprint $table) {
            $table->id();
            $table->string('pname',50);
            // $table->string('details');
            $table->integer('price');
            $table->integer('quantity')->default(1);
            $table->string('imgurl');
            $table->string('addbyemail');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('addtocart');
    }
}
