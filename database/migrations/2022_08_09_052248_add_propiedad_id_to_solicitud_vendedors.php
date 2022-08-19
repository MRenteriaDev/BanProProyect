<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPropiedadIdToSolicitudVendedors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitud_vendedors', function (Blueprint $table) {
            $table->unsignedBigInteger("propiedad_id")->nullable();
            $table->foreign("propiedad_id")->references("id")->on("propiedades")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitud_vendedors', function (Blueprint $table) {
            $table->unsignedBigInteger("propiedad_id")->nullable();
            $table->foreign("propiedad_id")->references("id")->on("propiedades")->onDelete("cascade");
        });
    }
}
