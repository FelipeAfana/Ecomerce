<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return "LISTA DE PRODUCTOS";
    }

    function create(){
        return "este es create";
    }

    function show($name, $category=null)
    {
    if ($category==null){
        return "detalles del producto ". $name;
    } else{
        return "Este es el else";
    };
    }
}
