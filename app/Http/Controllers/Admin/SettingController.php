<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\ShippingMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function formShipping(){
        $shipping = ShippingMethod::all()->first();
        return view('admin.setting.shipping',compact('shipping'));
    }

    public function updateShipping(Request $request){
        $id = $request->id;
        $shipping_method = ShippingMethod::find($id);
        if ($shipping_method->id){
            $shipping_method->shipping_name = $request->shipping_name;
            $shipping_method->fee = $request->fee;
            $shipping_method->save();
        }else{
            $shipping_method = new ShippingMethod();
            $shipping_method->shipping_name = $request->shipping_name;
            $shipping_method->fee = $request->fee;
            $shipping_method->save();
        }
        Session::flash('thongbao','Update Success');
        return redirect()->back();
    }

}