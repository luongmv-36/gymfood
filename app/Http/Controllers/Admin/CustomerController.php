<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\CustomerAddress;

class CustomerController extends Controller
{
    public function listCustomer(){
        $customer = User::all()->where('is_admin','<>',1);
        return view('admin.customer.list',compact('customer'));
    }
}
