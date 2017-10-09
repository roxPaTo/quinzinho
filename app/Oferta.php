<?php

namespace quinzinho;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = "oferta";
	protected $guarded = ['id'];
	protected $fillable = array('data', 'ativa', 'cardapio_id');

	public function cardapio()
    {
    	return $this->belongsTo('quinzinho\Cardapio');
    }
}
