<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_p');
            $table->integer('id_kat')->unsigned();
            $table->foreign('id_kat')->references('id_kat')->on('categories');
            $table->string('ime');
            $table->text('opis')->nullable();
            $table->integer('kolicina');
            $table->string('slika')->nullable();
            $table->integer('cena');
            $table->date('rok');
            $table->timestamps();
            $table->string('slug')->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
