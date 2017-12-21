<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\CustomerAddress;
class CustomerController extends Controller
{
    public function form_register(){
        return view('customer.register');
    }

    public function register(Request $request){
        $data = $request->input();
        $this->validate($request,
            [
                'email' =>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'first_name' => 'required',
                'cpassword'=>'required|same:password',
                'phone'=>'required',
                'address1' => 'required',
                'country' => 'required'
            ],
            [
                'email.required'=> 'Vui lòng nhập email',
                'email.email' => 'Không đúng định dạng',
                'first_name.required' => 'First Name không được để trống',
                'email.unique' => 'Email đã có người sử dụng',
                'cpassword.same' =>'Mật khẩu không giống nhau',
                'password.min' => 'Mật khẩu ít nhất 6 kí tự',
                'phone.required'=> 'Phone không được để trống',
                'address1.required' => 'Address 1 không được để trống',
                'country.required' => 'Country không được để trống'
            ]
        );

        //save customer address
        $address = new CustomerAddress();
        $address->email = $data['email'];
        $address->phone = $data['phone'];
        $address->address1 = $data['address1'];
        $address->address2 = $data['address2'];
        $address->city = $data['city'];
        $address->passcode = $data['passcode'];
        $address->country = $data['country'];
        $address->save();
        $id_address = $address->id;
        //save ccustomer
        $user = new User();
        $user->name = $data['first_name'].'-'.$data['last_name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->id_address = $id_address;
        $user->save();
        $a = $user->id;
        Auth::login($user);
        return redirect()->back()->with('thanhcong','Đã tạo thành công id ='.$a.' và id address là '.$id_address);
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
          return redirect()->route('customer.view.profile',['id'=> Auth::user()->id])->with('thanhcong','Đã đăng nhập thành công nhé');
        }else{
            return redirect()->back()->with('thatbai','Đăng nhập không thành công nhé');
        }
    }

    public function profile($cusId){
        $cusId = (int)$cusId;
        try {
            $customer = User::findOrFail($cusId);
            if ($customer->email){
               $cus_address = $customer->customerAddress;
                if ($cus_address->email){
                    return view('customer.profile',compact('customer','cus_address'));
                }

            }
        }catch (ModelNotFoundException $e){
            return redirect()->route('customer.login')->with('thatbai','Tài Khoản Này Không Tồn Tại! Vui Lòng Đăng Nhập Tài Khoản Khác');
        }
    }

    public function logout(){
        Auth::logout();
        Session::forget('cartItems');
        Session::forget('grandTotal');
        return redirect()->route('home');
    }
}
