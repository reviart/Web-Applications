<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('STATUS_ORDERS', function (Blueprint $table) {
            $table->string('STATUS_ID')->primary();

            //foreign
            $table->string('ADMIN_ID');
            $table->string('DRIVER_ID');

            //content
            $table->string('STATUS_NAME', 30);
            $table->text('STATUS_DESC');
            $table->timestamps();

            //constraint
            $table->foreign('ADMIN_ID')->references('ADMIN_ID')->on('ADMINS');
            $table->foreign('DRIVER_ID')->references('DRIVER_ID')->on('DRIVERS');
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
        Schema::dropIfExists('STATUSORDER');
    }
}
