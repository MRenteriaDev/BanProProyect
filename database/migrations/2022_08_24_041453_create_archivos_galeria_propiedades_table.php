<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosGaleriaPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_galeria_propiedades', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('nombre_archivo');
            $table->unsignedBigInteger('propiedad_id')->nullable();
            $table->foreign('propiedad_id')->references('id')->on('propiedades')->onDelete('cascade');
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
        Schema::dropIfExists('archivos_galeria_propiedades');
    }
}
