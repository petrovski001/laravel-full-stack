<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_promotions', function (Blueprint $table) {
            $table->integer('id_prom')->unsigned();
            $table->integer('id_p')->unsigned();

            $table->primary(['id_prom','id_p']);
            $table->foreign('id_prom')->references('id_prom')->on('promotions');
            $table->foreign('id_p')->references('id_p')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_promotions');
    }
}
