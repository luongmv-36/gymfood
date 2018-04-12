<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\User;
use App\CustomerAddress;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function listCustomer(){
        $customer = User::where('is_admin',null)->get();
        return view('admin.customer.list',compact('customer'));
    }

    public function formCreateCustomer($id = null){
       $customer = null;
       $customerAdress = null;
       if (isset($id))
       {
           $customer = User::findOrFail($id);
           $customerAdress = CustomerAddress::findOrFail($customer->id_address);
       }

       return view('admin.customer.new',compact('customer','customerAdress'));
    }

    public function createOrUpdate(Request $request){
        Session::flash('message', "This Feature is Demo");
        return Redirect::back();
    }

    public function deleteCustomer($id = null){
       if ($id){
           $customer = User::find($id);
           if ($customer->id) {
               $customer->delete();
               Session::flash('thongbao','Deleted');
           }
       }
       return redirect()->route('admin.customer.list');
    }
}
