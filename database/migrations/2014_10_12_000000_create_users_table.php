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
        nullable();
      */
        Schema::create('USERS', function (Blueprint $table) {
            $table->increments('ID');

            //foreign
            $table->integer('ADMIN_ID');

            $table->string('EMAIL_CUST')->unique();
            $table->string('PASSWD_CUST');
            $table->string('NAME_CUST');
            $table->string('GENDER_CUST');
            $table->string('ADDRESS_CUST');
            $table->string('ADDRESS_TAG_CUST');
            $table->string('PHONENUMB_CUST');
            $table->string('IMAGE_CUST');
            $table->rememberToken();
            $table->timestamps();

            /*
              PIC = ADMIN
            */
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
