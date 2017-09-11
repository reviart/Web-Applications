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
        Schema::create('COORDINATE', function (Blueprint $table) {
            $table->increments('ID');

            //foreign
            $table->integer('DRIVER_ID');
            $table->integer('USER_ID');
            $table->integer('ADMIN_ID');

            //content
            $table->string('LATITUDE');
            $table->string('LONGITUDE');
            $table->timestamps();

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
