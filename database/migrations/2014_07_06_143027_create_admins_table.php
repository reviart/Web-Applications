<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ADMINS', function (Blueprint $table) {
            $table->string('ADMIN_ID')->primary();
            $table->string('NAME', 150);
            $table->string('EMAIL', 150);
            $table->string('JOB_TITLE', 50);
            $table->string('PASSWORD');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
