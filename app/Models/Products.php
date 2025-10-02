<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";
    protected $fillable=[
        'id',
        'name',
        'price',
        'descripcion',
        'category_id',
        'brand_id'
    ];
    public $timestamps=true; 

}
