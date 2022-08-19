<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposToPropiedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            $table->unsignedBigInteger("locacion_id")->nullable();
            $table->foreign("locacion_id")->references("id")->on("locacions")->onDelete("cascade");
            $table->unsignedBigInteger("tipo_propiedad_id")->nullable();
            $table->foreign("tipo_propiedad_id")->references("id")->on("tipo_propiedads")->onDelete("cascade");
            $table->integer("precio")->nullable();
            $table->string("tamano_propiedad")->nullable();
            $table->string("tamano_propiedad_construido")->nullable();
            $table->string("descripcion")->nullable();
            $table->date("fecha_construccion")->nullable();
            $table->integer("recamaras")->nullable();
            $table->integer("bano")->nullable();
            $table->boolean("aire_condicionado")->nullable();
            $table->boolean("balcon")->nullable();
            $table->boolean("internet")->nullable();
            $table->boolean("cable")->nullable();
            $table->boolean("alberca")->nullable();
            $table->boolean("lavaplatos")->nullable();
            $table->boolean("estacionamiento")->nullable();
            $table->boolean("refrigerador")->nullable();
            $table->string("planos")->nullable();
            $table->unsignedBigInteger("nearby_id")->nullable();
            $table->foreign("nearby_id")->references("id")->on("nearbys")->onDelete("cascade");
            $table->string("video_propiedad")->nullable();
            $table->unsignedBigInteger("review_id")->nullable();
            $table->foreign("review_id")->references("id")->on("reviews")->onDelete("cascade");
            $table->unsignedBigInteger("solicitud_vendedor_id")->nullable();
            $table->foreign("solicitud_vendedor_id")->references("id")->on("solicitud_vendedors")->onDelete("cascade");
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
            $table->unsignedBigInteger("locacion_id")->nullable();
            $table->foreign("locacion_id")->references("id")->on("locacions")->onDelete("cascade");
            $table->unsignedBigInteger("tipo_propiedad_id")->nullable();
            $table->foreign("tipo_propiedad_id")->references("id")->on("tipo_propiedads")->onDelete("cascade");
            $table->integer("precio")->nullable();
            $table->string("tamano_propiedad")->nullable();
            $table->string("tamano_propiedad_construido")->nullable();
            $table->string("descripcion")->nullable();
            $table->date("fecha_construccion")->nullable();
            $table->integer("recamaras")->nullable();
            $table->integer("bano")->nullable();
            $table->boolean("aire_condicionado")->nullable()->default(false);
            $table->boolean("balcon")->nullable()->default(false);
            $table->boolean("internet")->nullable()->default(false);
            $table->boolean("cable")->nullable()->default(false);
            $table->boolean("alberca")->nullable()->default(false);
            $table->boolean("lavaplatos")->nullable()->default(false);
            $table->boolean("estacionamiento")->nullable()->default(false);
            $table->boolean("refrigerador")->nullable()->default(false);
            $table->string("planos")->nullable();
            $table->unsignedBigInteger("nearby_id")->nullable();
            $table->foreign("nearby_id")->references("id")->on("nearbys")->onDelete("cascade");
            $table->string("video_propiedad")->nullable();
            $table->unsignedBigInteger("review_id")->nullable();
            $table->foreign("review_id")->references("id")->on("reviews")->onDelete("cascade");
            $table->unsignedBigInteger("solicitud_vendedor_id")->nullable();
            $table->foreign("solicitud_vendedor_id")->references("id")->on("solicitud_vendedors")->onDelete("cascade");
        });
    }
}
