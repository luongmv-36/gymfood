<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
    public function form_register(){
        return view('customer.register');
    }

    public function register(Request $request){
        $data = $request->input();
        $user = new User();
        $this->validate($request,
            [
                'email' =>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'first_name' => 'required',
                'last_name' => 'required',
                'cpassword'=>'required|same:password'
            ],
            [
                'email.required'=> 'Vui lòng nhập email',
                'email.email' => 'Không đúng định dạng',
                'email.unique' => 'Email đã có người sử dụng',
                'cpassword.same' =>'Mật khẩu không giống nhau',
                'password.min' => 'Mật khẩu ít nhất 6 kí tự'
            ]
        );


        $user->name = $data['first_name'].'-'.$data['last_name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();
        $a = $user->id;
       // var_dump($a);
        return redirect()->back()->with('thanhcong','Đã tạo thành công id ='.$a);
    }

    public function form_login(){
        return view('customer.login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $this->validate($request,
            [
                'email' => 'required|email',
                'password'=> 'required|min:6|max:20'
            ],
            [
            'email.required'=> 'Vui lòng nhập email',
             'email.email' => 'Không đúng định dạng',
             'password.min' => 'Mật khẩu ít nhất 6 kí tự'
            ]
        );

        $data = array('email' => $email, 'password' => $password);
        if (Auth::attempt($data)){
          return redirect()->back()->with('thanhcong','Đã đăng nhập thành công nhé');
        }else{
            return redirect()->back()->with('thatbai','Đăng nhập không thành công nhé');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
