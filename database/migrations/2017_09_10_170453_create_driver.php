<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DRIVER', function (Blueprint $table) {
            $table->increments('ID');

            //foreign
            $table->integer('ADMIN_ID');

            //content
            $table->string('ID_CARD_NUMBER');
            $table->string('EMAIL_DRIVER');
            $table->string('PASSWD_DRIVER');
            $table->string('NAME_DRIVER');
            $table->boolean('GENDER_DRIVER');
            $table->string('ADDRESS_DRIVER');
            $table->string('VECHILE_NUMBER');
            $table->string('PHONENUMB_DRIVER');
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
        Schema::dropIfExists('DRIVER');
    }
}
