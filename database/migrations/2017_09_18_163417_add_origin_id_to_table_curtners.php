<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOriginIdToTableCurtners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('CURTNERS', function (Blueprint $table) {
            $table->string('ORIGIN_ID')->nullable();
            $table->foreign('ORIGIN_ID')->references('ORIGIN_ID')->on('ORIGINMENUS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curtners', function (Blueprint $table) {
            //
        });
    }
}
