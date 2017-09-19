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
        Schema::create('ORIGINMENUS', function (Blueprint $table) {
            $table->string('ORIGIN_ID')->primary();

            //foreign
            $table->string('CURTNER_ID');

            //content
            $table->string('ORIGIN_CURTNER', 50);
            $table->timestamps();

            //constraint
            $table->foreign('CURTNER_ID')->references('CURTNER_ID')->on('CURTNERS');
            /*
              PIC = CURTNER
              seharusnya field curtner_id di tabel origin menu ga usah d cantumin
              tp nnti gimana ambil data pic nya?
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
