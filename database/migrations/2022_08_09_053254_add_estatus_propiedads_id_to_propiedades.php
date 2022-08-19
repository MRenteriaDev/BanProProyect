<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEstatusPropiedadsIdToPropiedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->unsignedBigInteger("estatus_propiedad_id")->nullable();
            $table->foreign("estatus_propiedad_id")->references("id")->on("estatus_propiedads")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->unsignedBigInteger("estatus_propiedad_id")->nullable();
            $table->foreign("estatus_propiedad_id")->references("id")->on("estatus_propiedads")->onDelete("cascade");
        });
    }
}
