<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Servic;

class HomeController extends Controller
{
    public function home () {

        $servic = Servic::find(1);
        $categories = Category::all();

        return view('pages.home', ['servic' => $servic, 'categories' => $categories]);
    }

    public function about () {

        $servic = Servic::find(1);
       
        return view('pages.about', ['servic' => $servic]);
    }



    public function catalog ($id) {

        $servic = Servic::find(1);
        $categories = Category::all();

        if ( $id == 'all') {
            $products = Product::all();
            $title = 'Все продукты';
        } else {
            $category = Category::find($id);
            $products = $category->products;
            $title = $category->name;
        }   

        return view('pages.catalog', ['servic' => $servic, 'categories' => $categories, 'products' => $products, 'title' => $title]);
    }



    public function product ($id) {

        $servic = Servic::find(1);
        $categories = Category::all();

        $product = Product::find($id);
        $category = Category::find($product->category_id);

        return view('pages.product', ['servic' => $servic, 'product' => $product, 'category' => $category, 'categories' => $categories]);
    }






    

}
