<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();

        return view('admin.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.category.create');
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
            'name' => 'required|max:150|min:5',
            'description' => 'nullable|max:300|min:10',
            'img' => 'mimes:jpeg,jpg,png|max:5000'
        ]);

        $category = new Category();
        $category->name = $request->input('name');
       
        if ($request->input('description')) {
            $category->description = $request->input('description');
        }

        if ($request->hasFile('img')) {          
            $category->img = $request->file('img')->store('categories');              
        }
        
        $category->save();

        return redirect()->route('category.index')->with('status', 'Новая категория добавлена!')->with('color', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        $products = $category->products;

        return view('admin.category.show', [ 'category' => $category, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $category = Category::find($id);
         return view('admin.category.edit', [ 'category' => $category ]);
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
            'description' => 'nullable|max:300|min:10',
            'img' => 'mimes:jpeg,jpg,png|max:5000'
       ]);

        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
              
        if ($request->hasFile('img')) {
           
            Storage::delete($category->img);
            $category->img = $request->file('img')->store('categories', 'public'); 

        }

        $category->save();

        return redirect()->route('category.index')->with('status', 'Категория обновлена!')->with('color', 'succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->products;
        
        if (count($posts) == 0) {

            if($category->img) {
                Storage::delete($category->img); 
            }

            $category->delete();

            return redirect()->route('category.index')->with('status', 'Категория удалена!')->with('color', 'success');
            
        } else {
            
            return redirect()->route('category.index')->with('status', 'В категории есть продукты! удалите сначала их')->with('color', 'warning');
        }
    }
}
