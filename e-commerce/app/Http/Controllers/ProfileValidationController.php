<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileValidationController extends Controller
{
    public function signup(){
        return view('App2/sign');
    }
    public function validation(Request $request){
        $validated = $request->validate([
            'name'=>['required'],
            'email'=>['required','unique:ecom','email','bail'],
            'password'=>['required','min:7','confirmed']
        ]);
        User::insert([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'password'=>bcrypt($validated['password']),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        return redirect()->route('index');
    }
    public function signin(){
        return view("App2/signin");
    }
    public function loginvalidation(Request $request){
        $credentials= $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->route('index');
        }
        else{
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
// DB::table('payments')->where('cust_id',)
//        $cust_id=$request->input('id');
//        $id=$request->input('user_id');
//        $cust_cart_id=DB::table('custcarts')->where('cust_id',$id)->value('id');
//        $count=DB::table('orders')->where('cust_cart_id',$cust_cart_id)->count();
       
//        $cart_id=DB::table('custcarts')->where('cust_id',$id)->value('id');
//         if (!is_array($cart_id)) {
//             $cart_id = [$cart_id];
//         }        
//         $total_price=DB::table('carts')->whereIn('cart_id',$cart_id)->sum('total_price');
//         $name=DB::table('custaddress')->where('id',$cust_id)->value('name');
//         $cust_id=DB::table('custaddress')->where('id',$cust_id)->value('id');
//         $addr=DB::table('custaddress')->where('id',$cust_id)->value('landmark');
//         // $del_date=$request->input('del_date');
//         $payment_type=$request->input('payment_type');
//         $payment_status=$request->input('payment_status');
//         $order_status=$request->input('order_status');
//         if($count==0){
//         DB::table('orders')->insert([
//             'cust_cart_id'=>$cust_cart_id,
//             'cust_id'=>$cust_id,
//             'cust_name'=>$name,
//             'shipping_addr'=>$addr,
//             'total_price'=>$total_price,
//             'payment_type'=>$payment_type,
//             'payment_status'=>$payment_status,
//             // 'del_date'=>$del_date,
//             'order_status'=>$order_status,
//         ]);
//         $data=DB::table('orders')->where('cust_id',$cust_id)->value('id');
//         return redirect()->route('orderdetails',['data'=>$data]);
//     }
//     // else{
//     //     DB::table('orders')->where('cust_cart_id',$cust_cart_id)->update([
//     //         'cust_id'=>$cust_id,
//     //         'cust_name'=>$name,
//     //         'shipping_addr'=>$addr, 
//     //     ]);
//     //     }
//     $data=DB::table('orders')->where('cust_id',$cust_id)->where('order_status','pending')->value('id');
//     return redirect()->route('orderdetails',['data'=>$data]);
    