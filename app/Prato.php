<?php

namespace quinzinho;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $table = "prato";
	protected $guarded = ['id'];
	protected $fillable = array('nome', 'descricao', 'foto', 'restaurante_id');

	public function restaurante()
    {
    	return $this->belongsTo('quinzinho\Restaurante');
    }
}
