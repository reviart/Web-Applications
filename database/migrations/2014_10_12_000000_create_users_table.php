<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*
        Update 24 august
      */
        Schema::create('USERS', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('EMAIL_CUST')->unique();
            $table->string('PASSWD_CUST');
            $table->string('NAME_CUST');
            $table->string('GENDER_CUST');
            $table->string('ADDRESS_CUST');
            $table->string('ADDRESS_TAG_CUST');
            $table->string('PHONENUMB_CUST');
            $table->string('PIC_TB_CUST');
            $table->string('PICTURE_CUST');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
