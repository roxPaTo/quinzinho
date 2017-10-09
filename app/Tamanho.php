<?php

namespace quinzinho;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    protected $table = "tamanho";
	protected $guarded = ['id'];
	protected $fillable = array('nome', 'descricao', 'foto', 'restaurante_id');

	public function restaurante()
    {
    	return $this->belongsTo('quinzinho\Restaurante');
    }
}
