<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\restaurante;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\restauranteFormRequest;
use socialcity;

class restauranteController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query = trim($request->get('searchText'));
            $restaurante = socialcity::table('restaurante')->where('Nombre','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            ->orderBy('Puntuacion','desc')
            ->paginate(7);
            return view('restaurante.index',["restaurante"->$restaurante,"searchText"->$query]);
        }
    }
    public function create(){
        return view("restaurante.create");
    }
    public function store(){
        $restaurante = new restaurante;
        $restaurante -> Nombre = $request -> get('Nombre');
        $restaurante -> Capacidad = $request -> get('Capacidad');
        $restaurante -> Ocupacion = $request -> get('Ocupacion');// Mirarlo, tiene que ser un array de valores
        $restaurante -> Puntuacion = $request -> get('Puntuacion');
        $restaurante -> Carta = $request -> get('Carta');
        $restaurante -> Horario = $request -> get('Horario');// Lo voy recoger como una cadena pero en vista lo separo
        $restaurante -> DIRECCION_ID = $request -> get('DIRECCION_ID');
        $restaurante -> CLIENTES_HABITUALES_ID = $request -> get('CLIENTES_HABITUALES_ID');
        $restaurante -> condicion = '1';
        $restaurante -> save();
        return Redirect::to('restaurante');
    }
    public function show($id){
        return view("restaurante.show",["restaurante"->restaurante::findOrFail($id)]);
    }
    public function edit($id){
        return view("restaurante.edit",["restaurante"->restaurante::findOrFail($id)]);
    }
    public function update(restauranteFormRequest $request,$id){
        $restaurante = restaurante::findOrFail($id);
        $restaurante -> Nombre = $request -> get('Nombre');
        $restaurante -> Capacidad = $request -> get('Capacidad');
        $restaurante -> Ocupacion = $request -> get('Ocupacion');
        $restaurante -> Puntuacion = $request -> get('Puntuacion');
        $restaurante -> Carta = $request -> get('Carta');
        $restaurante -> Horario = $request -> get('Horario');
        $restaurante -> DIRECCION_ID = $request -> get('DIRECCION_ID');
        $restaurante -> CLIENTES_HABITUALES_ID = $request -> get('CLIENTES_HABITUALES_ID');
        $restaurante -> update();
        return Redirect::to(restaurante);
    }
    public function destroy($id){
        $restaurante = restaurante::findOrFail($id);
        $restaurante -> condicion = '0';
        $restaurante -> update();
        return Redirect::to(restaurante);
    }
}
