<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servic>
 */
class ServicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'adres' => 'г. Самара, ул. Ново-Садовая, 30',
            'phone'  => '89398883322',
            'img1' => 'servic/img1(1300-408).jpeg',
            'img2' => 'servic/img1(1300-408).jpeg',
            'img3' => 'servic/img1(1300-408).jpeg'
        ];
    }
}
