<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOriginMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ORIGINMENU', function (Blueprint $table) {
            $table->increments('ID');

            //foreign
            $table->integer('CURTNER_ID');

            //content
            $table->string('ORIGIN_CURTNER');
            $table->timestamps();

            /*
              PIC = CURTNER
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
        Schema::dropIfExists('CREATEMENU');
    }
}
