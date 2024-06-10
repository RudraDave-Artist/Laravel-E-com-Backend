<?php

namespace App\Http\Controllers;

use App\Events\Menu;
use App\Models\Categoryitems;
use App\Models\Cart;
use App\Models\Productitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function category(){
        return view('Admin/addcategory');
    }
    public function addcat(Request $request){
        Categoryitems::insert([
            'title'=>$request->input('name'),
            'description'=>$request->input('description'),
        ]);
        return redirect()->route('admin');
    }
    public function admin(){
        $data=Categoryitems::get();
        return view('Admin/admin',['data'=>$data]);
    }   
    public function addproduct(Request $request){
        $id=Categoryitems::where('title',$request->input('category'))->value('id');
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
            'original' => 'required',
            'discount' => 'required',
        ]);
    
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/newimages');
            $image->move($destinationPath, $name);   
            $imageUrl = '/newimages/'.$name; // Store relative path in the database
        }
        Productitem::insert([
                    'cat_id'=>$id,
                    'title' => $request->input('title'),
                    'image' => $imageUrl,
                    'description' => $request->input('description'),
                    'orig_price' => $request->input('original'),
                    'disc_price' => $request->input('discount'),
                ]);
                return redirect()->route('productlist',['cat_id'=>$id]);
    }
    public function productlist($cat_id){
        $data=Productitem::where('cat_id',$cat_id)->get();
        return view('Admin/productlist',['data'=>$data]);
    }
    public function editproduct($id){
        $data=Productitem::where('id',$id)->first();
        return view('Admin/editproduct',['data'=>$data]);
    }   
    public function deleteproduct($id){
        $id2=Productitem::where('id',$id)->value('cat_id');
        DB::table('productitems')->delete($id);
        return redirect()->route('productlist',['cat_id'=>$id2]); 
    }   
    public function updateproduct(Request $request){
        $oldImageUrl = Productitem::where('id', $request->input('id'))->value('image');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/newimages');
            $image->move($destinationPath, $name);   
            $imageUrl = '/newimages/'.$name; // Store relative path in the database
        }
        else{
            $imageUrl =$oldImageUrl;
        }
           
        DB::table('productitems')->where('id',$request->input('id'))->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'image'=>$imageUrl,
            'orig_price'=>$request->input('original'),
            'disc_price'=>$request->input('discount'),
        ]);
        $id=Productitem::where('id',$request->input('id'))->value('cat_id');
        return redirect()->route('productlist',['cat_id'=>$id]);
    }   
    public function dryfruits(){
      $cat_id=DB::table('categoryitems')->where('title','Nuts')->value('id');
      $data=DB::table('productitems')->where('cat_id',$cat_id)->get();  
        return view('App2/dryfruits',['data'=>$data]);
    }   
    public function beverages(){
        $data=Productitem::get();
        return view('App2/beverages',['data'=>$data]);
    }   
    public function kitchen(){
      $cat_id=DB::table('categoryitems')->where('title','kitchen')->value('id');
      $data=DB::table('productitems')->where('cat_id',$cat_id)->get();  
      return view('App2/kitchen',['data'=>$data]);
    }  
    public function household(){
        $cat_id=DB::table('categoryitems')->where('title','Household')->value('id');
        $data=DB::table('productitems')->where('cat_id',$cat_id)->get();  
        return view('App2/household',['data'=>$data]);
      }       
    public function decrement(Request $request){
        $item_id=$request->input('item_id');
        $cart=Cart::select('quantity','item_price','total_price')->where('id',$item_id)->first();
        if($cart){
            $quantity=$cart->quantity;
            $price=$cart->item_price;
            $totalprice=$cart->total_price;
        }
        $quantity--;
        $totalprice=$totalprice-$price;
        Cart::where('id',$item_id)->update([
            'quantity'=>$quantity,
            'total_price'=>$totalprice
        ]);
        return response()->json(array('msg'=>$quantity,'msg2'=>$totalprice),200);
    }
    public function increment(Request $request){
        $item_id=$request->input('item_id');
        $cart=Cart::select('quantity','item_price')->where('id',$item_id)->first();
        if($cart){
            $quantity=$cart->quantity;
            $price=$cart->item_price;
        }
        $quantity++;
        $totalprice=$quantity*$price;
        Cart::where('id',$item_id)->update([
            'quantity'=>$quantity,
            'total_price'=>$totalprice
        ]);
        return response()->json(array('msg'=>$quantity,'msg2'=>$totalprice),200);
    }
}
