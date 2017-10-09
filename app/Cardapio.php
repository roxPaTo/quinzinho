<?php

namespace quinzinho;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
	protected $table = "cardapio";
	protected $guarded = ['id'];
	protected $fillable = array('valor', 'restaurante_id', 'prato_id', 'tamanho_id');

	public function restaurante()
    {
    	return $this->belongsTo('quinzinho\Restaurante');
    }

    public function prato()
    {
    	return $this->belongsTo('quinzinho\Prato');
    }

    public function tamanho()
    {
    	return $this->belongsTo('quinzinho\Tamanho');
    }
}
