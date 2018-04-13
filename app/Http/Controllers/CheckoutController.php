<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Orders;
use App\OrderAddress;
use App\OrderItems;
class CheckoutController extends Controller
{

    public function step2(Request $request){
        Session::forget('orderAddress');
        Session::forget('shippingAndpayment');
        if (Auth::check()) {
            $user = Auth::user();
            $id = Auth::id();
            $c_address = CustomerAddress::find($user->id_address);
        }else{
            $user = null;
            $c_address = null;
        }
          return view('frontend.checkout.step2',compact('user','c_address'));

    }

    public function step3(Request $request){
        $data = $request->input();
        Session::put('orderAddress',$data);
        return view('frontend.checkout.step3');
    }

    public function step4(Request $request){
        $data = $request->input();
        Session::put('shippingAndpayment',$data);
        if (Session::has('orderAddress') && Session::has('shippingAndpayment')){
            $orderAddress = Session::get('orderAddress');
            $shippingAndpayment = Session::get('shippingAndpayment');
        }else{
            $orderAddress = null;
            $shippingAndpayment = null;
        }
        return view('frontend.checkout.step4',compact('orderAddress','shippingAndpayment'));
    }

    public function step5(Request $request){
        $shipping_method = $request->input();
        $xacthuc = true;
        return view('frontend.checkout.step5',['shipping_method'=> $shipping_method,'xacthuc'=> $xacthuc]);
    }

    public function step6(Request $request){
        $data = $request->input();
        $total = Session::get('grandTotal');
        $items = Session::get('cartItems');
        $order = new Orders;
        $order->status = 'pending';
        $order->total = $total;
        if (Auth::check()){
            $order->customer_id = Auth::id();
            $order->bill_name   = Auth::user()->name;
        }else{
            $order->bill_name   = $request->name;;
        }
        $order->ship_name = '';
        $order->shipping_method = $request->shipping_method;
        $order->payment_method = $request->payment_method;

       if ( $order->save()) {
           $orderAddress = new OrderAddress;
           $orderAddress->name = $request->name;
           $orderAddress->phone = $request->phone;
           $orderAddress->email = $request->email;
           $orderAddress->address1 = $request->address1;
           $orderAddress->address2 = $request->address2;
           $orderAddress->city = $request->city;
           $orderAddress->country = $request->country;
           $orderAddress->passcode = $request->passcode;
           $orderAddress->order_id = $order->id;
           $orderAddress->save();

           if (is_array($items)){
               foreach ($items as $item){
                   $orderItems = new OrderItems;
                   $orderItems->order_id = $order->id;
                   $orderItems->product_id = $item['id'];
                   $orderItems->qty = $item['qty'];
                   $orderItems->price = $item['price'];
                   $orderItems->save();
               }
           }
           Session::forget('cartItems');
           Session::forget('grandTotal');

       }


        return view('frontend.checkout.step6',['order_id'=>$order->id]);
    }


    public function successPage(){
        return view('frontend.checkout.success');
    }
}
