<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function orderid(){
        return  $this->hasOne('App\Models\Order','cust_cart_id','id');   
    }
}
