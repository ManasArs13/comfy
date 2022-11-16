<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        \App\Models\Order::factory()->make([
            'product_id' => 1
        ]);
/*
        \App\Models\Category::factory(4)
            ->has(Product::factory()->count(3))->create();
*/

        \App\Models\Category::factory()->has(Product::factory()->count(2))
            ->create([
                'name' => 'Диваны "книжки"',
                'description' => null,
                'img'  => 'categories/knizhka_divan.jpg'
            ]);

        \App\Models\Category::factory()->has(Product::factory()->count(2))
            ->create([
                'name' => 'Прямые диваны',
                'description' => null,
                'img'  => 'categories/pryamoi_divan.jpg'
            ]);

        \App\Models\Category::factory()->has(Product::factory()->count(2))
            ->create([
                'name' => 'Скандинавские диваны',
                'description' => null,
                'img'  => 'categories/scandinavskii_divan.png'
            ]);

        \App\Models\Category::factory()->has(Product::factory()->count(2))
            ->create([
                'name' => 'Угловые диваны',
                'description' => null,
                'img'  => 'categories/uglovoi_divan.jpg'
            ]);
    }
}
