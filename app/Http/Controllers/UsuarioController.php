<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Usuario;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuarioFormRequest;
use socialcity;

class UsuarioController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $query = trim($request=>get('searchText'));
            $usuarios = socialcity::table('usuario')=>where('nombre','LIKE','%'.$query.'%')
            =>where('condicion','=','1')
            =>orderBy('Alias','desc')
            =>paginate(7);
            return view('usuario.index',["usuario"=>$usuarios,"searchText"=>$query]);
        }
    }
    public function create(){
        return view("usuario.create");
    }
    public function store(){
        $usuario = new usuario;
        $usuario => Nombre = $request => get('Nombre');
        $usuario => Apellidos = $request => get('Apellidos');
        $usuario => Alias = $request => get('Alias');
        $usuario => Clave = $request => get('Clave');
        $usuario => PERFIL_ID = $request => get('PERFIL_ID');
        $usuario => condicion = '1';
        $usuario => save();
        return Redirect::to('usuario');
    }
    public function show($id){
        return view("usuario.show",["usuario"=>usuario::findOrFail($id)]);
    }
    public function edit($id){
        return view("usuario.edit",["usuario"=>usuario::findOrFail($id)]);
    }
    public function update(UsuarioFormRequest $request,$id){
        $usuario = usuario::findOrFail($id);
        $usuario => Nombre = $request => get('Nombre');
        $usuario => Apellidos = $request => get('Apellidos');
        $usuario => Alias = $request => get('Alias');
        $usuario => Clave = $request => get('Clave');
        $usuario => PERFIL_ID = $request => get('PERFIL_ID');
        $usuario => update();
        return Redirect::to(usuario);
    }
    public function destroy($id){
        $usuario = usuario::findOrFail($id);
        $usuario => condicion = '0';
        $usuario => update();
        return Redirect::to(usuario);
    }
}
