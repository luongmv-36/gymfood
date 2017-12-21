<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
   public function search(Request $request, $category = null){
      $post = $request->input();
      $list_product = array();
      //If Only get
      if (empty($post)){
          $list_product = DB::table('products')
                   ->where('category_id','=', $category)
                   ->get();
          return view('frontend.category.productlist',compact('list_product'));
      }
     //Search category id with price
          if ($category && $post['type'] == 'price'){
              $list_product = DB::table('products')
                                    ->where('category_id','=',$category)
                                    ->whereBetween('price',[$post['fromPrice'], $post['toPrice']])
                                    ->get();
          }elseif (!$category && $post['type'] == 'price'){
      //Search only price
              $list_product = DB::table('products')
                                    ->whereBetween('price',[$post['fromPrice'], $post['toPrice']])
                                    ->get();

          }
       
       return view('frontend.category.productlist',compact('list_product'));
   }
}
