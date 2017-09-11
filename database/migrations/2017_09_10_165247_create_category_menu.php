<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CATEGORYMENU', function (Blueprint $table) {
            $table->increments('ID');

            //foreign
            $table->integer('CURTNER_ID');

            $table->string('CATEGORY_MENU');
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
        Schema::dropIfExists('CATEGORYMENU');
    }
}
