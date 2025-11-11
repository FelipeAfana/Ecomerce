<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;


class BrandFactory extends Factory
{
    protected $model= Brand::class;
   
    public function definition(): array
    {

        $brand=[
            'Apple',
            'Samsung',
            'Sony',
            'LG',
            'Dell',
            'HP',
            'Lenovo',
            'Asus',
            'Acer',
            'Microsoft'
        ];
        return [
            'name' => $this->faker->randomElement($brand),

        ];
    }
}
