<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    
    public function login(){
        return view('admin.login',['messages'=>'']);
    }

    public function loginPost(Request $request){
        $data = $request->input();
        $user = ['email'=>$data['email'],'password'=>$data['password']];
        if (Auth::attempt($user)) {
            return redirect()->route('dashboard');
        }else{
            return view('admin.login',['messages'=>'Tài khoản không đúng hoặc không hợp lệ !']);
        }
    }
}
