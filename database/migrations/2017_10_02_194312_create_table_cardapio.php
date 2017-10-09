<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCardapio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardapio', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('valor', 5, 2);
            $table->timestamps();
            $table->integer('restaurante_id');
            $table->integer('prato_id');
            $table->integer('tamanho_id');
            $table->foreign('restaurante_id')->references('id')->on('restaurante');
            $table->foreign('prato_id')->references('id')->on('prato');
            $table->foreign('tamanho_id')->references('id')->on('tamanho');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardapio');
    }
}
