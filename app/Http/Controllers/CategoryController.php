<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }

    public function coso(Request $request){
        dd($request->all());

        Category::create([
            'name'=>$request->get('name')
        ]);

        return "SE GUADO EXITOSAMENTE";
    }
    public function store(){
        return view('admin.category.dashboard');
    }
}
