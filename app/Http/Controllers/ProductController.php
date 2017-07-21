<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    
    public function view($id, $slug){
        $id = (int)$id;
        $product = Product::find($id);
        if (!$product){
            $product = null;
        }
        return view('frontend.product.view',compact('product'));
    }
}
