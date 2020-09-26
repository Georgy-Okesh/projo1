<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{

    public function index()
    {
        $products=Product::inRandomOrder()->take(8)->get();
        $cats=Category::all();
        return view('product.index',['products'=>$products,'cats'=>$cats]);
    }
}
