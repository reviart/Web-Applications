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
        Schema::create('STATUSORDER', function (Blueprint $table) {
            $table->increments('ID');

            //foreign
            $table->integer('ADMIN_ID');

            //content
            $table->string('STATUS_NAME');
            $table->string('STATUS_DESC');
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
        Schema::dropIfExists('STATUSORDER');
    }
}
