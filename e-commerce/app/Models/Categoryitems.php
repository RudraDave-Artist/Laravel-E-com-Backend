<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productitem;
class Categoryitems extends Model
{
    use HasFactory;
    public function catdetails(){
          return $this->hasMany('App\Models\Productitem','cat_id','id');   
        }
}
