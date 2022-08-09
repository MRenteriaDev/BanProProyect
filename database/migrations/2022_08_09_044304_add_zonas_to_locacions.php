<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddZonasToLocacions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locacions', function (Blueprint $table) {
            $table->unsignedBigInteger("zona_id")->nullable();
            $table->foreign("zona_id")->references("id")->on("zonas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locacions', function (Blueprint $table) {
            $table->unsignedBigInteger("zona_id")->nullable();
            $table->foreign("zona_id")->references("id")->on("zonas")->onDelete("cascade");
        });
    }
}
