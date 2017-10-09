<?php

namespace quinzinho;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	protected $table = "pedido";
	protected $guarded = ['id'];
	protected $fillable = array('observacao', 'valor', 'oferta_id', 'forma_pagamento_id');

	public function oferta()
    {
    	return $this->belongsTo('quinzinho\Oferta');
    }		    //

    public function formaPagamento()
    {
    	return $this->belongsTo('quinzinho\FormaPagamento');
    }
}
