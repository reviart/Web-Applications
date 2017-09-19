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
            $table->string('MENU_ID')->primary();

            //foreign
            $table->string('CURTNER_ID');
            $table->string('CATEGORY_MENU_ID');
            $table->string('ORIGIN_ID');

            //content
            $table->string('NAME_MENU', 150);
            $table->double('PRICE_MENU', 15, 2);
            $table->enum('STATUS_MENU', ['AVAILABLE', 'NOT AVAILABLE']); //available or not available
            $table->string('IMAGE_MENU')->nullable();
            $table->string('RAWMATERIAL_MENU', 100); //bahan dasar
            $table->text('DESC_MENU');
            $table->timestamps();

            //constraint
            $table->foreign('CURTNER_ID')->references('CURTNER_ID')->on('CURTNERS');
            $table->foreign('ORIGIN_ID')->references('ORIGIN_ID')->on('ORIGINMENUS');
            $table->foreign('CATEGORY_MENU_ID')->references('CATEGORY_ID')->on('CATEGORYMENUS');
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
