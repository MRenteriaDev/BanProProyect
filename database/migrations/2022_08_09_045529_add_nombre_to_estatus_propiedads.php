<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNombreToEstatusPropiedads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estatus_propiedads', function (Blueprint $table) {
            $table->string("nombre")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estatus_propiedads', function (Blueprint $table) {
            $table->string("nombre")->nullable();
        });
    }
}
