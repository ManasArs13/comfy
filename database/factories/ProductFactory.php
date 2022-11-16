<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => Str::random(50),
            'description' => Str::random(500),
            'price'=> 400,
            'avatar' => Str::random(10),
            'img1' => Str::random(10),
            'img2' => Str::random(10),
            'img3' => Str::random(10),
        ];
    }
}
