<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'name'=> fake() -> name(),
            'price'=> fake() -> randomFloat(2,10,100000),
            'descripcion'=> fake()->paragraph(),
            'category_id'=> Category::inRandomOrder()-> first()->id,
            'brand_id'=> Brand::inRandomOrder()-> first()->id
        ];
    }
}
