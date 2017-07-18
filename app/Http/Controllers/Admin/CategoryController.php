<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function listCategory(){
        $category = Category::all()->sortByDesc('updated_at');
        return view('admin.category.list',compact('category'));
    }
    
    public function formCreate(){
        return view('admin.category.new');
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
        }else{
            $path_images = null;
        }
        $category->name = $data['name'];
        $category->images = $path_images;
        $category->active = $request->active;
        $category->save();
        return redirect()->back()->with('thongbao','Lưu thành công');
    }
}
