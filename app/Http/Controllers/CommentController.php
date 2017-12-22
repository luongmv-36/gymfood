<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{

    public function add(Request $request){
        $name = $request->name;
        $email = $request->email;
        $comment = $request->comment;
        
        $commentModel = new Comment;
        $commentModel->name = $name;
        $commentModel->email = $email;
        $commentModel->description = $comment;
        $commentModel->product_id = $request->productId;
        $commentModel->vote = $request->vote;
        $commentModel->save();
        
        return redirect()->back()->with('thongbao','Bạn Đã Comment Thành Công');
    }
    
}
