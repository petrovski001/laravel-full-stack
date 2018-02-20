<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_n');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->integer('id_d')->unsigned();
            $table->text('cart');
            $table->integer('id_l')->unsigned();
            $table->foreign('id_d')->references('id_d')->on('suppliers');
            $table->foreign('id_l')->references('id_l')->on('suppliers');
            $table->integer('id_a')->unsigned();
            $table->foreign('id_a')->references('id_a')->on('addresses');
            $table->date('vremeNaNaracka');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
