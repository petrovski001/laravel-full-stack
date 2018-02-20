<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produces', function (Blueprint $table) {
            $table->integer('id_p')->unsigned();
            $table->integer('id_proiz')->unsigned();
            $table->primary(['id_p','id_proiz']);
            $table->foreign('id_p')->references('id_p')->on('products');
            $table->foreign('id_proiz')->references('id_proiz')->on('manufacturers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produces');
    }
}
