<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index () {
        

        $categories = Category::all();
        //dd($categories);

        return view('home');

    }

    public function admin () {
        

        //$categories = Category::all();
        //dd($categories);

        return view('admin.home');

    }


}
