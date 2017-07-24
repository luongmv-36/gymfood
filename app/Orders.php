<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table='orders';

    public function customer(){
        return $this->hasOne('App\User','id','customer_id');
    }

    public function items(){
        return $this->hasMany('App\OrderItems','order_id','id');
    }

    public function address(){
        return $this->hasOne('App\OrderAddress','order_id','id');
    }
}
