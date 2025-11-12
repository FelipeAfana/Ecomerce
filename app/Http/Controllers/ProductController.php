<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view("products.index");
    }

    function create(){

        $brand =Brand::all();
        $category= Category::all();
        return view("products.create",[
            'brands'=>$brand,
            'category'=>$category
        ]);
    }

    function show($name, $category=null)
    {
        
        return view("products.show");
    }
}
