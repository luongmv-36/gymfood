<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\CustomerAddress;
use App\Events\Event2;
class CartController extends Controller
{
    
    public function view(){

        return view('frontend.cart.view');
    }

    public function checkout(){

        if (Auth::check()){
            $user = Auth::user();
            $id = Auth::id();
            $c_address = CustomerAddress::find($user->id_address);
            return view('frontend.checkout.step2',compact('user','c_address'));
        }
        return view('frontend.cart.checkout');
    }

    public function addToCart(Request $request,$type = null){
        //die();
        $id = (int)$request->input('product_id');
        $qty = (int)$request->input('qty');
        if ($qty == 0){
            $qty =1;
        }
        $product = Product::find($id);
        if (!$product){
            return redirect()->route('cart.view')->with('thongbao','Product Không tồn tại');
        }
        if ($type == 'update'){
            $thongbao = 'cập nhật';
        }else{
            $thongbao = 'thêm';
        }
        $is_in_cart = false;
        if (Session::has('cartItems')){
            $arrayCart = Session::get('cartItems');
            foreach ($arrayCart as $key => $item){
                if ($item['id'] == $id){
                    $is_in_cart = true;
                    if ($type == 'update'){
                        $arrayCart[$key]['qty'] = $qty;
                    }else {
                        $arrayCart[$key]['qty'] = $item['qty'] + $qty;
                    }
                    Session::put('cartItems',$arrayCart);
                    break;
                }
            }
        }
        if (!$is_in_cart){
            Session::push('cartItems',['id' => $id,'name'=>$product->name,'qty'=>$qty, 'price'=>$product->price, 'images'=>$product->images]);
        }

      $this->setTotalCart();
        event(new Event2(121212123));
      return redirect()->route('cart.view')->with('thongbao','Đã '.$thongbao.' thành công '.$product->name.' vào giỏi hàng');
//        var_dump(Session::get('cartItems'));
//        var_dump(Session::get('grandTotal'));
       // Session::flush();
    }

    public function removeItem($id = null){
        $id = (int)$id;
        $product = Product::find($id);
        if ($product && Session::has('cartItems')){
                $arrayCart = Session::get('cartItems');
                foreach ($arrayCart as $key => $item){
                    if ($item['id'] == $id){
                       unset($arrayCart[$key]);
                       Session::put('cartItems',$arrayCart);
                        break;
                    }
                }
            }
        $this->setTotalCart();
        return redirect()->route('cart.view');
    }

    public function setTotalCart(){
        //grand total
        $grand_total = 0;
        foreach (Session::get('cartItems') as $value){
            $grand_total += $value['qty']*$value['price'];
        }
        Session::put('grandTotal',$grand_total);
    }
}
