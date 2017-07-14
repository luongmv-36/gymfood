<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function step1(Request $request){
        $check_user = $request->input('user_checkout');
        $xacthuc = true;
        return view('frontend.checkout.step2',['check_user'=> $check_user,'xacthuc'=> $xacthuc]);
    }
}
