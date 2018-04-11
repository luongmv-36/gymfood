<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\CustomerAddress;

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
}
