<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function step2(Request $request){
        $check_user = $request->input('user_checkout');
        $xacthuc = true;
        return view('frontend.checkout.step2',['check_user'=> $check_user,'xacthuc'=> $xacthuc]);
    }

    public function step3(Request $request){
        $data_billing = $request->input();
        $xacthuc = true;
        return view('frontend.checkout.step3',['data_billing'=> $data_billing,'xacthuc'=> $xacthuc]);
    }

    public function step4(Request $request){
        $data_shipping = $request->input();
        $xacthuc = true;
        return view('frontend.checkout.step4',['data_shipping'=> $data_shipping,'xacthuc'=> $xacthuc]);
    }

    public function step5(Request $request){
        $shipping_method = $request->input();
        $xacthuc = true;
        return view('frontend.checkout.step5',['shipping_method'=> $shipping_method,'xacthuc'=> $xacthuc]);
    }

    public function step6(Request $request){
        $payment_method = $request->input();
        $xacthuc = true;
        return view('frontend.checkout.step6',['payment_method'=> $payment_method,'xacthuc'=> $xacthuc]);
    }

    public function order(Request $request){
        $order = $request->input();
        $xacthuc = true;
        return view('frontend.checkout.success',['order'=> $order,'xacthuc'=> $xacthuc]);
    }
}
