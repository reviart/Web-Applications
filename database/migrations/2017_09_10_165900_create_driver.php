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
        Schema::create('DRIVERS', function (Blueprint $table) {
            $table->string('DRIVER_ID')->primary();

            //foreign
            $table->string('ADMIN_ID');

            //content
            $table->string('ID_CARD_NUMBER', 50);
            $table->string('EMAIL_DRIVER', 150);
            $table->string('PASSWD_DRIVER');
            $table->string('NAME_DRIVER', 150);
            $table->enum('GENDER_DRIVER', ['PRIA', 'WANITA']);
            $table->string('ADDRESS_DRIVER', 200);
            $table->string('VECHILE_NUMBER', 10);
            $table->string('PHONENUMB_DRIVER', 15);
            $table->string('IMAGE_DRIVER')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //constraint
            $table->foreign('ADMIN_ID')->references('ADMIN_ID')->on('ADMINS');
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
