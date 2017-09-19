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
        Schema::create('CATEGORYMENUS', function (Blueprint $table) {
            $table->string('CATEGORY_ID')->primary();

            //foreign
            $table->string('CURTNER_ID');

            $table->string('CATEGORY_MENU', 50);
            $table->timestamps();

            $table->foreign('CURTNER_ID')->references('CURTNER_ID')->on('CURTNERS');
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
