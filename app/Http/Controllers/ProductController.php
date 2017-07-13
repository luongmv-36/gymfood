<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function view($id, $slug){
        return view('frontend.product.view');
    }
}
