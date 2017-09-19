<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PAYMENTORDERS', function (Blueprint $table) {
            $table->increments('ID');

            //foreign
            $table->integer('CUSTOMER_ID');
            $table->integer('CURTNER_ID');
            $table->integer('DRIVER_ID');
            $table->integer('ADMIN_ID');
            $table->integer('MENU_ID');
            $table->integer('STATUSORDER_ID');

            //content
            $table->integer('GRAND_TOTAL');
            $table->boolean('PAYMENT_METHOD');
            $table->string('DELIVERYADD_ORDER');
            $table->timestamps();

            /*
              $table->('ORDER_STATUS');
              $table->('PIC');
              tidak perlu cukup foreign saja nnti pake join

              PIC = SEMUANYA WKKWKWKWKWK
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
        Schema::dropIfExists('PAYMENTORDER');
    }
}
