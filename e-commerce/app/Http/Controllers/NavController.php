<?php

namespace App\Http\Controllers;

use App\Events\AddtoCart;
use App\Models\CustAddress;
use App\Models\Productitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Cart;
use App\Models\Custcart;
use App\Models\Order;
use App\Models\Categoryitems;

class NavController extends Controller
{
    public function nav(){
        return view('App2/home');
    } 
    public function about(){
        // $student = User::where('id',8)->with(['Cartdetails'])->first();
        // echo "<pre>";
        // print_r($student->toArray());
        // exit;
        // $student = CustAddress::where('id',11)->with(['Orders'])->first();
        // echo "<pre>";
        // print_r($student->toArray());
        // exit;
        return view('App2/about');
    }    
    public function contact(){
        return view('App2/contact');
    }    
    public function household(){
        return view('App2/household');
    }    
    public function faqs(){
        return view('App2/faqs');
    }    
    public function pages(){
        return view('App2/pages');
    }   
    public function typography(){
        return view('App2/typography');
    }    
    public function icons(){
        return view('App2/icons');
    }    
    public function single(){
        return view('App2/single');
    }    
    public function single2($id){
        $data=DB::table('productitems')->where('id',$id)->first();
        return view('App2/single2',compact('data'));
    }    
    public function help(){
        return view('App2/help');
    }    
    public function terms(){
        return view('App2/terms');  
    }    
    public function privacy(){
        return view('App2/privacy');
    }  
    public function events(){
        return view('App2/event');
    } 
    public function listen(){
        return view('App2/event');
    } 
   
    public function cart(Request $request){
        $name=$request->input('name');
        $cust_id=$request->input('id');
        $product_id=$request->input('product_id');
        $count=DB::table('custcarts')->where('cust_id',$cust_id)->count();
        $cart_id=DB::table('custcarts')->where('cust_id',$cust_id)->value('id');
        $prod_count=DB::table('carts')->where('cart_id',$cart_id)->where('product_id',$product_id)->count();
        $cart_id= DB::table('custcarts')->where('cust_id',$cust_id)->value('id');
        if($count==0){
            DB::table('custcarts')->insert([
                'cust_id'=>$request->input('id'),
            ]);
        }
        if($prod_count==0){
            event(new AddtoCart($name));
            DB::table('carts')->insert([
                'cart_id'=>$cart_id,
                'product_id'=>$request->input('product_id'),
                'item_name'=>$request->input('item_name'),
                'item_price'=>$request->input('amount'),
                'quantity'=>1,
                'total_price'=>$request->input('amount'),
                'item_image'=>$request->input('item_image'),
            ]);
            return redirect()->route('cartlist',['id'=>$cart_id]);
        }

        else{
            $id=Cart::where('product_id',$product_id)->value('id');
            $cart=Cart::where('id',$id)->first();
            if($cart){
                $quantity=$cart->quantity;
                $price=$cart->item_price;
                $totalprice=$cart->total_price;
            }
            $quantity++;
            $totalprice=$totalprice+$price;
            Cart::where('product_id',$product_id)->update([
                'quantity'=> $quantity,
                'item_price'=>$price,
                'total_price'=>$totalprice,
            ]);
            return redirect()->route('cartlist',['id'=>$cart_id]);
        }  
    } 
    public function cartlist($id){
        $data=Cart::where('cart_id',$id)->get();
        return view('App2/cartlist',['data'=>$data]);
    }
    public function cartlist2(Request $request){
        $id=$request->input('user_id');
        $cart_id=Custcart::where('cust_id',$id)->value('id');
        return redirect()->route('cartlist',['id'=>$cart_id]);   
    }
    public function deleteitem($id,$cart_id){
        Cart::findOrFail($id)->delete();
        return redirect()->route('cartlist',$cart_id);        
    }
    public function delievery(){
        return view("App2/delievery");
    }
    public function delieverydetails(Request $request){
        DB::table('custaddress')->insert([
            'cust_id'=>$request->input('id'),
            'name'=>$request->input('name'),
            'phne_num'=>$request->input('number'),
            'landmark'=>$request->input('landmark'),
            'city'=>$request->input('city'),
            'addr_type'=>$request->input('type'),
        ]);
        return redirect()->route('addressdetail',['cust_id'=>$request->input('id')]);
    }
    public function addressdetail($cust_id){
        $data=DB::table('custaddress')->where('cust_id',$cust_id)->get();
        return view('App2/addressdetail',['data'=>$data]);
    }
    public function edit($id){
        $data=DB::table('custaddress')->where('id',$id)->get();
        return view("App2/edit",['data'=>$data]);
    }
    public function updatedetail(Request $request,$id){
        DB::table('custaddress')->where('id',$id)->update([
            'cust_id'=>$request->input('id'),
            'name'=>$request->input('name'),
            'phne_num'=>$request->input('number'),
            'landmark'=>$request->input('landmark'),
            'city'=>$request->input('city'),
            'addr_type'=>$request->input('type'),
        ]);
        return redirect()->route('addressdetail',['cust_id'=>$request->input('id')]);
    }
    public function select($id){
        // $cust_id=DB::table('custaddress')->where('id',$id)->value('cust_id');
        return redirect()->route('displayaddress',['id'=>$id]);
    }
    public function displayaddress($id){
        $data=DB::table('custaddress')->where('id',$id)->get();
        return view('App2/displayaddress',['data'=>$data]);
    }
    public function payment($id){
        return view ("App2/payment",['id'=>$id]);
    }
    public function order(Request $request){
        $order_status=$request->input('order_status');
        $payment_status=$request->input('payment_status');
        $payment_type=$request->input('payment_type');
        $user_id=$request->input('user_id');
        $name=$request->input('name');
        $addr=$request->input('addr');
        $cart_id=DB::table('custcarts')->where('cust_id',$user_id)->value('id');
        if (!is_array($cart_id)) {
            $cart_id = [$cart_id];
        }        
        $total_price=DB::table('carts')->whereIn('cart_id',$cart_id)->sum('total_price');
       
        $count=DB::table('orders')->where('cust_id',$user_id)->where('payment_status','pending')->count();
        echo $count;
        echo $total_price;
        // exit;
        if($count==0)
        {
        // echo "HEre";
        // exit;
        DB::table('orders')->insert([
            'cust_id'=>$user_id,
            'cust_name'=>$name,
            'shipping_addr'=>$addr,
            'total_price'=>$total_price,
            'payment_status'=>$payment_status,
            'payment_type'=>$payment_type,
            'order_status'=>$order_status,
        ]);
    }
    else{
        // echo "helloHEre";
        // exit;
        Order::where('cust_id',$user_id)->where('payment_status','pending')->update([
            'cust_name'=>$name,
            'shipping_addr'=>$addr,
            'total_price'=>$total_price,
            ]);
        }
        $id=Order::where('cust_id',$user_id)->where('payment_status','pending')->value('id');
        return redirect()->route('orderdetails',['id'=>$id]);
       }
    public function orderdetails($id){
        $data=Order::where('id',$id)->first();
        return view("App2/order",['data'=>$data]);
    }

    public function carthistory($id){
        $data=Order::where('cust_id',$id)->get();
        return view("App2/history",['data'=>$data]);
    }

    public function search(Request $request){
        $search=$request->Search;
        $search=Productitem::where('title','like',"%$search%")->get();
        return view('App2/search',['data'=>$search]);
    }
}
