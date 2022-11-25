<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function admin()
    {
        $orders = Order::with('product')->where('completed', false)->get();
        $completed = Order::with('product')->where('completed', true)->get();
        return view('admin.home', ['orders' => $orders, 'completed' => $completed]);
    }



    public function order($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('pages.order', ['product' => $product, 'categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:150|min:5|string',
            'email' => 'required|max:150|min:5|string',
            'phone' => 'required|max:150|min:5',
            'adres' => 'max:300',
            'product_id' => 'required|integer'
        ]);

        $order = new Order();

        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->product_id = $request->input('product_id');

        if ($request->input('adres')) {
            $order->adres = $request->input('adres');
        }

        $order->save();

        return redirect()->route('home')->with('status', 'Ваша заявка отправлена. Ожидайте звонка специалиста');
    }

    public function orderComplete($id)
    {

        $order = Order::find($id);
        $order->completed = true;
        $order->save();

        return redirect()->route('admin')->with('status', 'Заказ закрыт');
    }

    public function orderReturn($id)
    {
        $order = Order::find($id);
        $order->completed = false;
        $order->save();

        return redirect()->route('admin')->with('status', 'Статус заказа открыт');
    }
}
