<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodosPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodos_pagos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nombre")->nullable();
            $table->bigInteger("numero_tarjeta")->nullable();
            $table->date("fecha_vencimiento")->nullable();
            $table->integer("nip")->nullable();
            $table->unsignedBigInteger("seller_id")->nullable();
            $table->foreign("seller_id")->references("id")->on("sellers")->onDelete("cascade");
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
        Schema::dropIfExists('metodos_pagos');
    }
}
