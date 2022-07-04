<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('password');
            $table->date('dob');
            $table->enum('gender',["M","F","O"]);
            $table->string('email',100);
            $table->string('phoneno');
            $table->string('address');
            // $table->string('subject',15);
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
        Schema::dropIfExists('registration');
    }
}
