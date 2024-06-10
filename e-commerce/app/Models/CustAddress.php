<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class CustAddress extends Model
{
    use HasFactory;
    public function Order(){
        return  $this->hasMany('App\Models\Order','cust_id','id');   
    }
}
