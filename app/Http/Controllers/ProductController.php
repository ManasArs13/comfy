<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.product.index', [ 'products' => $products ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:150|min:5|string',
            'description' => 'required|max:300|min:10|string',
            'price' => 'required|max:6|min:1|integer',
            'avatar' => 'mimes:jpeg,jpg,png|max:5000',
            'img1' => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'img2' => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'img3' => 'nullable|mimes:jpeg,jpg,png|max:5000'
        ]);

        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('avatar')) {          
            $product->avatar = $request->file('avatar')->store('products');              
        }

        if ($request->hasFile('img1')) {          
            $product->img1 = $request->file('img1')->store('products');              
        }

        if ($request->hasFile('img2')) {          
            $product->img2 = $request->file('img2')->store('products');              
        }

        if ($request->hasFile('img3')) {          
            $product->img3 = $request->file('img3')->store('products');              
        }
    
        $product->save();

        return redirect()->route('product.index')->with('status', 'Новый продукт добавлен!')->with('color', 'success');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $category = Category::find($product->category_id);
    
        return view('admin.product.show', ['product' => $product, 'category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:150|min:5',
            'description' => 'required|max:300|min:10',
            'price' => 'required|max:6|min:1',
            'avatar' => 'mimes:jpeg,jpg,png|max:5000',
            'img1' => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'img2' => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'img3' => 'nullable|mimes:jpeg,jpg,png|max:5000'
        ]);

        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');

        if ($request->hasFile('avatar')) {   
            Storage::delete($product->avatar);       
            $product->avatar = $request->file('avatar')->store('products');              
        }

        if ($request->hasFile('img1')) {  
            Storage::delete($product->img1);        
            $product->img1 = $request->file('img1')->store('products');              
        }

        if ($request->hasFile('img2')) {      
            Storage::delete($product->img2);     
            $product->img2 = $request->file('img2')->store('products');              
        }

        if ($request->hasFile('img3')) {  
            Storage::delete($product->img3);         
            $product->img3 = $request->file('img3')->store('products');              
        }
    
        $product->save();

        return redirect()->route('product.index')->with('status', 'Продукт обнавлён!')->with('color', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if($product->avatar) {
            Storage::delete($product->avatar); 
        }
        if($product->img1) {
            Storage::delete($product->img1); 
        }
        if($product->img2) {
            Storage::delete($product->img2); 
        }
        if($product->img) {
            Storage::delete($product->img3); 
        }

        $product->delete();
            return redirect()->route('product.index')->with('status', 'Продукт удален!')->with('color', 'success');
    }
}
