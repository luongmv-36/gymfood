<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product1 = Product::all()->where('category_id',1)->take(4);
        $product2 = Product::all()->where('category_id',2)->sortByDesc('id')->take(4);
        return view('frontend.index',['product1'=>$product1,'product2'=>$product2]);
    }
}
