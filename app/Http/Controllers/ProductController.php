<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Products;
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max: 255',
            'description' => 'required| string',
            'price' => 'required| numeric',
            'category' => 'required| exists:categories, id',
            'brand' => 'required|exists:brands, id'
        ]);
        

        $product = new Products();
        $product->name = $request->get('name');
        $product->descripcion = $request->get('description');
        $product->price = $request->get('price');
        $product->category_id = $request->get( 'category');
        $product->brand_id = $request->get('brand');

        $product->save();

        return "save products";

    }
}
