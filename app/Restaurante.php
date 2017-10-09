<?php

namespace quinzinho;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
	protected $table = "restaurante";
	protected $guarded = ['id'];
	//protected $fillable = array('nome', 'descricao', 'logo', 'hora_inicio_funcionamento', 'hora_fim_funcionamento');

    protected $fillable = array('nome', 'descricao');

	public function tamanhos()
    {
    	return $this->hasMany('quinzinho\Tamanho');
    }

    public function itensCardapio()
    {
    	return $this->hasMany('quinzinho\Cardapio');
    }

    public function pratos()
    {
    	return $this->hasMany('quinzinho\Prato');
    }

    public function formasPagamento()
    {
    	return $this->hasMany('quinzinho\FormaPagamento');
    }
}
