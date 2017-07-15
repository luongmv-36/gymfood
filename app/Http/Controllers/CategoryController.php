<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function productgird($category_id){
        return view('frontend.category.productgird',['category_id'=> $category_id]);
    }

    public function productlist($category_id){
        return view('frontend.category.productlist',['category_id'=> $category_id]);
    }
}
