<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::all();

        return view('pages.home', ['categories' => $categories]);
    }

    public function about()
    {
        return view('pages.about');
    }



    public function catalog($id)
    {
        $categories = Category::all();

        if ($id == 'all') {
            $products = Product::all();
            $title = 'Все продукты';
        } else {
            $category = Category::find($id);
            $products = $category->products;
            $title = $category->name;
        }

        return view('pages.catalog', ['categories' => $categories, 'products' => $products, 'title' => $title]);
    }



    public function product($id)
    {
        $categories = Category::all();

        $product = Product::find($id);
        $category = Category::find($product->category_id);

        return view('pages.product', ['product' => $product, 'category' => $category, 'categories' => $categories]);
    }
}
