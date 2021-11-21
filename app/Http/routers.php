<?php

Route::get('/',function(){
    return view('welcome');
});

Route::resource('usuario','UsuarioController');
Route::resource('bar','BarController');
Route::resource('restaurante','RestauranteController');
?>