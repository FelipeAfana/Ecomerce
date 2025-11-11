<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{

    protected $model= Category::class;
    
    public function definition(): array
    {

        $category=[
            'Phones',
            'Computers',
            'TVs',
            'Appliances',
            'Cameras',
            'Audio',
            'Wearables',
            'Gaming',
            'Networking',
            'Accessories'
        ];

        return [
            'name' => $this->faker->randomElement($category),

        ];
    }
}
