<?php

namespace quinzinho;

use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    protected $table = "forma_pagamento";
	protected $guarded = ['id'];
	protected $fillable = array('nome', 'restaurante_id');

	public function restaurante()
    {
    	return $this->belongsTo('quinzinho\Restaurante');
    }
}
