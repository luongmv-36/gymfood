<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function view($id, $slug){
        $id = (int)$id;
        $product = Product::find($id);
        if (!$product){
            $product = null;
        }
        //get Comment
        $commentProduct = DB::table('comment')
                                ->where('product_id',$id)
                                ->get();
        return view('frontend.product.view',compact('product','commentProduct'));
    }
}
