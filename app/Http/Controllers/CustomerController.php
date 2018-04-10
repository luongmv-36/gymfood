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
                'email'     =>'required|email|unique:users,email',
                'password'  =>'required|min:6|max:20',
                'first_name'=> 'required',
                'cpassword' =>'required|same:password',
                'phone'     =>'required',
                'address1'  => 'required',
                'country'   => 'required'
            ],
            [
                'email.required'        => 'Email is required',
                'email.email'           => 'Email format is not correct',
                'first_name.required'   => 'First Name is required',
                'email.unique'          => 'Email Address is exists',
                'cpassword.same'        =>'Re password is not same as password',
                'password.min'          => 'Password is min 6 character',
                'phone.required'        => 'Phone is required',
                'address1.required'     => 'Address1 is required',
                'country.required'      => 'Country is required'
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
        return redirect()->route('customer.view.profile',['id' => $a])->with('thanhcong','Đã tạo thành công id ='.$a.' và id address là '.$id_address);
    }

    public function form_login(){
        return view('customer.login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $this->validate($request,
            [
                'email'         => 'required|email',
                'password'      => 'required|min:6|max:20'
            ],
            [
             'email.required'   => 'Email is required',
             'email.email'      => 'Email format is not correct',
             'password.min'     => 'Password is min 6 character'
            ]
        );

        $data = array('email' => $email, 'password' => $password);
        if (Auth::attempt($data) && $request->in_checkout == 1){
          return redirect()->route('checkout.cart')->with('thanhcong','Login Success');
        }elseif (Auth::attempt($data)) {
            return redirect()->route('customer.view.profile', ['id' => Auth::user()->id])->with('thanhcong', 'Login Success');
        }else{
            return redirect()->back()->with('thatbai','Login Success');
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
