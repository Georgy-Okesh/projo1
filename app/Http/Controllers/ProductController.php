<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index(){
        $products=Product::inRandomOrder()->take(4)->get();
        $cats=Category::all();
        return view('product.index',['products'=>$products,'cats'=>$cats]);
    }
    
    public function show ($id){
        $product=Product::where('id',$id)->firstOrfail();
        $cats=Category::all();
        return view ('product.show',['product'=>$product,'cats'=>$cats]);
    }

}
