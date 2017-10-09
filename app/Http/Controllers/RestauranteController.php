<?php

namespace quinzinho\Http\Controllers;

use Illuminate\Http\Request;
use quinzinho\Restaurante;

class RestauranteController extends Controller
{
    //show
    //edit
    //update
    //destroy

    public function index(){
        $restaurantes = Restaurante::all();
        return view('restaurante.index')->with('restaurantes', $restaurantes);
    }

    public function create(){
    	return view('restaurante.create');
    }

    public function store(Request $request){
    	$params = $request->all();
        $restaurante = new Restaurante($params);
        $restaurante->save();

        return redirect()->action('RestauranteController@index')->withInput($request->only('nome'));
    }
}
