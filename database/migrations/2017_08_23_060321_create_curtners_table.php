<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurtnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CURTNERS', function (Blueprint $table) {
            $table->string('CURTNER_ID')->primary();

            //foreign
            //$table->string('ORIGIN_ID')->nullable();
            $table->string('ADMIN_ID');

            //content
            $table->string('NAME_CURT', 150);
            $table->string('EMAIL_CURT', 150);
            $table->string('PASSWD_CURT');
            $table->string('ADDRESS_CURT', 200);
            $table->string('PHONENUMB_CURT', 15);
            $table->string('OWNERNAME_CURT', 150);
            $table->string('OWNERIDNUMB_CURT', 50);
            $table->rememberToken();
            $table->timestamps();

            //constraint
            //$table->foreign('ORIGIN_ID')->references('ORIGIN_ID')->on('ORIGINMENUS');
            $table->foreign('ADMIN_ID')->references('ADMIN_ID')->on('ADMINS');
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
        Schema::dropIfExists('curtners');
    }
}
