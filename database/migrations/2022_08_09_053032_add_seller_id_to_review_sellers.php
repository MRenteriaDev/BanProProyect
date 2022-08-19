<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSellerIdToReviewSellers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review_sellers', function (Blueprint $table) {
            $table->unsignedBigInteger("seller_id")->nullable();
            $table->foreign("seller_id")->references("id")->on("sellers")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review_sellers', function (Blueprint $table) {
            $table->unsignedBigInteger("seller_id")->nullable();
            $table->foreign("seller_id")->references("id")->on("sellers")->onDelete("cascade");
        });
    }
}
