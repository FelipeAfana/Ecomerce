<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("products",function(){
    return "LISTA DE PRODUCTOS";
});

Route::get("products/create",function(){
    return "FORMULARIO DE CREACION DE PRODUCTOS";
});

Route::get("products/{name}/{category?}",function($name, $category=null){
    if ($category==null){
        return "detalles del producto ". $name;
    }
    else{
        return "coso";
    }
});
