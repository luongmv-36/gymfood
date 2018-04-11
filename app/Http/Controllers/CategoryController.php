<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function productgird($category_id){
        $category_id = (int)$category_id;
        $list_product = Category::find($category_id)->products();
        $list_product = $list_product->paginate(6);
        return view('frontend.category.productgird',compact('list_product'));
    }

    public function productlist($category_id){
        $category_id = (int)$category_id;
        $list_product = Category::find($category_id)->products();
        $list_product = $list_product->paginate(6);
        return view('frontend.category.productlist',compact('list_product'));
    }
}
