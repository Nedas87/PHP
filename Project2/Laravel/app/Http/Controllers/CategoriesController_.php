<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $arr['categories'] = Category::all();
        $arr['products'] = Product::all();
        return view('home')->with($arr);
    }
}
