<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('COORDINATES', function (Blueprint $table) {
            $table->string('COORDINATE_ID')->primary();

            //foreign
            $table->string('DRIVER_ID');
            $table->string('USER_ID');
            $table->string('ADMIN_ID');

            //content
            $table->string('LATITUDE');
            $table->string('LONGITUDE');
            $table->timestamps();

            //constraint
            $table->foreign('ADMIN_ID')->references('ADMIN_ID')->on('ADMINS');
            $table->foreign('DRIVER_ID')->references('DRIVER_ID')->on('DRIVERS');
            $table->foreign('USER_ID')->references('USER_ID')->on('USERS');
            /*
              PIC = ADMIN & DRIVER
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
        Schema::dropIfExists('COORDINATE');
    }
}
