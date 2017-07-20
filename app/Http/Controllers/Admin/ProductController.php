<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProductController extends Controller
{
    public function listProduct(){
        $products = Product::all()->sortByDesc('updated_at');
        return view('admin.product.list',compact('products'));
    }
    
    public function formCreate($id = null){
        if ((int)$id){
            $product_data = Product::find($id);
        }else {
            $product_data = '';
        }
        $category = Category::all();
        return view('admin.product.new',compact('product_data','category'));
    }

    public function create(Request $request){
        $product = new Product;

        //Case edit
        $check_id = $request->has('id');
        if ($check_id){
            $product = $product::find($request->id);
            $thongbao = 'Edit thành công';
        }else{
            $thongbao = "Đã thêm thành công";
        }
        $getimageName = null;
        $getimageNameZoom = null;
        //upload images
        if ($request->hasFile('images')) {
            if ($request->file('images')->isValid()) {
                $getimageName = time() . '.' . $request->images->getClientOriginalExtension();
                $request->images->move(public_path('images/products/small'), $getimageName);
            }
        }
        if ($getimageName) {
            $path_images = 'products/small/' . $getimageName;
            $product->images = $path_images;
        }else{
            $path_images = null;
        }

        if ($request->hasFile('images_zoom')) {
            if ($request->file('images_zoom')->isValid()) {
                $getimageNameZoom = time() . '.' . $request->images_zoom->getClientOriginalExtension();
                $request->images_zoom->move(public_path('images/products/large'), $getimageNameZoom);
            }
        }
        if ($getimageNameZoom) {
            $path_images_zoom = 'products/large/' . $getimageNameZoom;
            $product->images_zoom = $path_images_zoom;
        }else{
            $path_images_zoom = null;
        }
        
        //save
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->active = $request->active;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->save();

        return redirect()->back()->with('thongbao',$thongbao.'id= '.$product->id);
    }

    public function delete($id = null){
        $del_file = '';
        if (!empty($id)){
            $delete = Product::find($id);
            $image_path = $delete->images;
            $imagezoom_path = $delete->images;
            $image_path = public_path().'/images/'.$image_path;
            $imagezoom_path = public_path().'/images/'.$imagezoom_path;
            $delete->delete();
            \File::delete($image_path);
            \File::delete($imagezoom_path);
            $del_file = " Đã xóa file $image_path and $imagezoom_path";

            return redirect()->back()->with('thongbao','Xóa thành công id : '.$id.$del_file);
        }else{
            return redirect()->back()->with('thongbao','Không tồn tại  :id '.$id);
        }
    }
}
