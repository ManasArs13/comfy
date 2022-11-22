<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Servic;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index () {

        $servic = Servic::find(1);
        $categories = Category::all();

        return view('pages.home', ['servic' => $servic, 'categories' => $categories]);

    }

    public function catalog ($id) {

        $servic = Servic::find(1);
        $categories = Category::all();
        $category = Category::find($id);
        $products = $category->products;

        return view('pages.catalog', ['servic' => $servic, 'categories' => $categories, 'products' => $products, 'title' => $category->name]);

    }



    public function admin () {
        
        $orders = Order::with('product')->where('completed', false)->get();
        $completed = Order::with('product')->where('completed', true)->get();

        return view('admin.home', ['orders' => $orders, 'completed' => $completed]);

    }


    public function orderComplete ($id) {
        
        $order = Order::find($id);
        $order->completed = true;
        $order->save();

        return redirect()->route('admin')->with('status', 'Заказ закрыт');
    }

    public function orderReturn ($id) {

        $order = Order::find($id);
        $order->completed = false;
        $order->save();

        return redirect()->route('admin')->with('status', 'Статус заказа открыт');
    }


}
