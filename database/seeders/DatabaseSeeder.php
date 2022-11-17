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
    
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        \App\Models\Order::factory()->make([
            'product_id' => 1
        ]);

        \App\Models\Servic::factory()->create();


        


#Категори1
        \App\Models\Category::factory()
            ->create([
                'name' => 'Диваны еврокнижки',
                'description' => null,
                'img'  => 'categories/1avatar.jpeg'
            ]);

                \App\Models\Product::factory()
                ->create([
                    'name' => 'Диван-кровать Print — 147х200 см',
                    'description' => 'Диван оснащен надежным механизмом кроватного типа «Еврокнижка», благодаря чему не займет много места и отлично подойдет даже для маленькой комнаты.',
                    'price' => 36100,
                    'category_id' => 1,
                    'avatar' => 'products/1avatar.jpeg',
                    'img1' => 'products/1img1.jpeg',
                    'img2' => 'products/1img2.jpeg',
                    'img3' => 'products/1img3.jpeg'
                ]);

                \App\Models\Product::factory()
                ->create([
                    'name' => 'Диван-кровать Travel — 150х195 см',
                    'description' => 'Диван оснащен надежным механизмом кроватного типа «Еврокнижка», благодаря чему не займет много места и отлично подойдет даже для маленькой комнаты.',
                    'price' => 33290,
                    'category_id' => 1,
                    'avatar' => 'products/2avatar.jpeg',
                    'img1' => 'products/2img1.jpeg',
                    'img2' => 'products/2img2.jpeg',
                    'img3' => 'products/2img3.jpeg'
                ]);

 #Категори2               
        \App\Models\Category::factory()
            ->create([
                'name' => 'Диваны аккордион',
                'description' => null,
                'img'  => 'categories/3avatar.jpeg'
            ]);

                \App\Models\Product::factory()
                ->create([
                    'name' => 'Диван-кровать Ergonomic',
                    'description' => 'Диван с популярным рисунком стёжки в виде квадратов, подчёркнутых двойной линией строчки. Накладки на подлокотниках из термостойкого ЛМДФ (температура до 60 градусов) с ярко выраженной текстурой дерева, в двух цветовых решениях — позволяют создать индивидуальный образ дивана.',
                    'price' => 83100,
                    'category_id' => 2,
                    'avatar' => 'products/3avatar.jpeg',
                    'img1' => 'products/3img1.jpeg',
                    'img2' => 'products/3img2.jpeg',
                ]);

                \App\Models\Product::factory()
                ->create([
                    'name' => 'Диван-кровать Mellow Midle',
                    'description' => 'Диван с популярным рисунком стёжки в виде квадратов, подчёркнутых двойной линией строчки. Накладки на подлокотниках из термостойкого ЛМДФ (температура до 60 градусов) с ярко выраженной текстурой дерева, в двух цветовых решениях — позволяют создать индивидуальный образ дивана.',
                    'price' => 80000,
                    'category_id' => 2,
                    'avatar' => 'products/4avatar.jpeg',
                    'img1' => 'products/4img1.jpeg',
                    'img2' => 'products/4img2.jpeg',
                ]);

 #Категори3                
        \App\Models\Category::factory()
            ->create([
                'name' => 'Диваны тик-так',
                'description' => null,
                'img'  => 'categories/5avatar.jpeg'
            ]);

                \App\Models\Product::factory()
                ->create([
                    'name' => 'Диван-кровать Nordic — 136х201 см',
                    'description' => 'В диванах используется механизм «Тик-так», который не нуждается в колесиках, роликах или других вспомогательных средствах раскладки. Это устройство почти не повреждает покрытие пола. Поэтому такая модель отлично подойдёт людям, трепетно относящихся к полу в своем жилище.',
                    'price' => 54100,
                    'category_id' => 3,
                    'avatar' => 'products/5avatar.jpeg',
                    'img1' => 'products/5img1.jpeg',
                    'img2' => 'products/5img2.jpeg',
                    'img3' => 'products/5img3.jpeg'
                ]);

                \App\Models\Product::factory()
                ->create([
                    'name' => 'Диван-кровать Travel — 150х195 Диван-кровать Dominik — 140х200 см',
                    'description' => 'В диванах используется механизм «Тик-так», который не нуждается в колесиках, роликах или других вспомогательных средствах раскладки. Это устройство почти не повреждает покрытие пола. Поэтому такая модель отлично подойдёт людям, трепетно относящихся к полу в своем жилище.',
                    'price' => 53900,
                    'category_id' => 3,
                    'avatar' => 'products/6avatar.jpeg',
                    'img1' => 'products/6img1.jpeg',
                    'img2' => 'products/6img2.jpeg',
                    'img3' => 'products/6img3.jpeg'
                ]);

#Категори3
        \App\Models\Category::factory()
            ->create([
                'name' => 'Диваны дельфин',
                'description' => null,
                'img'  => 'categories/7avatar.jpeg'
            ]);
          
                \App\Models\Product::factory()
                ->create([
                    'name' => 'Диван-кровать Nordic — 136х201 см',
                    'description' => 'Диван оснащен надежным механизмом кроватного типа «Дельфин», благодаря чему спальное место раскладывается за несколько секунд, без лишних движений и значительных усилий.',
                    'price' => 74100,
                    'category_id' => 4,
                    'avatar' => 'products/7avatar.jpeg',
                    'img1' => 'products/7img1.jpeg',
                    'img2' => 'products/7img2.jpeg',
                    'img3' => 'products/7img3.jpeg'
                ]);

                \App\Models\Product::factory()
                ->create([
                    'name' => 'Угловой диван-кровать Premier (левый) — 144х196 см',
                    'description' => 'Диван оснащен надежным механизмом кроватного типа «Дельфин», благодаря чему спальное место раскладывается за несколько секунд, без лишних движений и значительных усилий.',
                    'price' => 75900,
                    'category_id' => 4,
                    'avatar' => 'products/8avatar.jpeg',
                    'img1' => 'products/8img1.jpeg',
                    'img2' => 'products/8img2.jpeg',
                    'img3' => 'products/8img3.jpeg'
                ]);



    }
}
