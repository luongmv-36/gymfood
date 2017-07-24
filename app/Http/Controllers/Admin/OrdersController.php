<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orders;

class OrdersController extends Controller
{
    public function listOrders(){
        $orders = Orders::all();
        return view('admin.orders.list',compact('orders'));
    }

    public function view($id){
       $id = (int)$id;
       $orders = Orders::find($id);
       return view('admin.orders.detail',compact('orders'));
    }
}
