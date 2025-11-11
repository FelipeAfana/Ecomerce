<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Products extends Model
{

    use HasFactory;
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
