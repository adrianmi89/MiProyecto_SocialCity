<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\bar;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\barFormRequest;
use socialcity;

class barController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query = trim($request->get('searchText'));
            $bar = socialcity::table('bar')->where('Nombre','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            ->orderBy('Puntuacion','desc')
            ->paginate(7);
            return view('bar.index',["bar"->$bar,"searchText"->$query]);
        }
    }
    public function create(){
        return view("bar.create");
    }
    public function store(){
        $bar = new bar;
        $bar -> Nombre = $request -> get('Nombre');
        $bar -> Capacidad = $request -> get('Capacidad');
        $bar -> Ocupacion = $request -> get('Ocupacion');
        $bar -> Puntuacion = $request -> get('Puntuacion');
        $bar -> Horario = $request -> get('Horario');
        $bar -> JuegosDeMesa = $request -> get('JuegosDeMesa');
        $bar -> Eventos = $request -> get('Eventos');
        $bar -> DIRECCION_ID = $request -> get('DIRECCION_ID');
        $bar -> CLIENTES_HABITUALES_ID = $request -> get('CLIENTES_HABITUALES_ID');
        $bar -> condicion = '1';
        $bar -> save();
        return Redirect::to('bar');
    }
    public function show($id){
        return view("bar.show",["bar"->bar::findOrFail($id)]);
    }
    public function edit($id){
        return view("bar.edit",["bar"->bar::findOrFail($id)]);
    }
    public function update(barFormRequest $request,$id){
        $bar = bar::findOrFail($id);
        $bar -> Nombre = $request -> get('Nombre');
        $bar -> Capacidad = $request -> get('Capacidad');
        $bar -> Ocupacion = $request -> get('Ocupacion');
        $bar -> Puntuacion = $request -> get('Puntuacion');
        $bar -> Horario = $request -> get('Horario');
        $bar -> JuegosDeMesa = $request -> get('JuegosDeMesa');
        $bar -> Eventos = $request -> get('Eventos');
        $bar -> DIRECCION_ID = $request -> get('DIRECCION_ID');
        $bar -> CLIENTES_HABITUALES_ID = $request -> get('CLIENTES_HABITUALES_ID');
        $bar -> update();
        return Redirect::to(bar);
    }
    public function destroy($id){
        $bar = bar::findOrFail($id);
        $bar -> condicion = '0';
        $bar -> update();
        return Redirect::to(bar);
    }
}
