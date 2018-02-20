<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakeOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('make_orders', function (Blueprint $table) {
            $table->increments('id_mo');
            $table->integer('id_p')->unsigned();
            $table->foreign('id_p')->references('id_p')->on('products');
            $table->integer('id_n')->unsigned();
            $table->foreign('id_n')->references('id_n')->on('orders');
            $table->integer('kolicina');
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
        Schema::dropIfExists('make_orders');
    }
}
