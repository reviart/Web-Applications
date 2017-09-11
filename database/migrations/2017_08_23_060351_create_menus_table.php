<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MENUS', function (Blueprint $table) {
            $table->increments('ID');

            //foreign
            $table->integer('CURTNER_ID');
            $table->integer('CATEGORY_MENU_ID');
            $table->integer('ORIGIN_ID');

            //content
            $table->string('NAME_MENU');
            $table->double('PRICE_MENU');
            $table->boolean('STATUS_MENU'); //available or not available
            $table->string('IMAGE_MENU ');
            $table->string('RAWMATERIAL_MENU'); //bahan dasar
            $table->text('DESC_MENU');
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
        Schema::dropIfExists('menus');
    }
}
