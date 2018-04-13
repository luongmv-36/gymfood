<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function listCategory(){
        $category = Category::all()->sortByDesc('updated_at');
        $count_cat = array();
        foreach ($category as $cat)
        {
            $pro = Product::where('category_id',$cat->id)->get()->count();
            $count_cat[$cat->id] = $pro;
        }
        return view('admin.category.list',compact('category','count_cat'));
    }
    
    public function formCreate($id = null){
        if (isset($id)){
            $category_data = Category::find($id);
        }else{
            $category_data = '';
        }
        return view('admin.category.new',compact('category_data'));
    }

    public function create(Request $request){
        $data = $request->input();
        $this->validate($request,
            [
                'name' => 'required',
                'images' => 'image|mimes:jpg,png,jpeg,gif,svg'
            ],
            [
                'name.required' => 'Vui lòng nhập name'
            ]
        );

        $category = new Category();
        $thongbao = "Lưu mới thành công";
        $check_id = $request->has('id');
        if ($check_id){
            $category = Category::find($data['id']);
            $thongbao = 'Sửa thành công';
        }

        $getimageName = null;
        //upload images
        if ($request->hasFile('images')) {
            if ($request->file('images')->isValid()) {
                $getimageName = time() . '.' . $request->images->getClientOriginalExtension();
                $request->images->move(public_path('images/category'), $getimageName);
            }
        }
        if ($getimageName) {
            $path_images = 'category/' . $getimageName;
            $category->images = $path_images;
        }else{
            $path_images = null;
        }
        $category->name = $data['name'];
        $category->active = $request->active;
        $category->save();
        return redirect()->back()->with('thongbao',$thongbao);
    }

    public function delete($id = null){
        $del_file = '';
        if (!empty($id)){
            $delete = Category::find($id);
            $image_path = $delete->images;
            $image_path = public_path().'/images/'.$image_path;
            $delete->delete();
            \File::delete($image_path);
            $del_file = " Đã xóa file $image_path";

            return redirect()->back()->with('thongbao','Xóa thành công id : '.$id.$del_file);
        }else{
            return redirect()->back()->with('thongbao','Không tồn tại  :id '.$id);
        }
    }
}
