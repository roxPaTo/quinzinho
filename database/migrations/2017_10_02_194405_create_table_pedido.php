<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->text('observacao');
            $table->decimal('valor', 5, 2);
            $table->timestamps();
            $table->integer('oferta_id');
            $table->integer('forma_pagamento_id');
            $table->foreign('oferta_id')->references('id')->on('oferta');
            $table->foreign('forma_pagamento_id')->references('id')->on('forma_pagamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }}
