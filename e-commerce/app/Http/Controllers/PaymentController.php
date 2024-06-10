<?php

namespace App\Http\Controllers;

use App\Jobs\EmailJob;
use App\Models\custcart;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Payment;
use App\Events\paymentcapture;
class PaymentController extends Controller
{
    public function index()
    {
        return view("Razor/payment");
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $id = $request->input('id');
                $user_id = $request->input('user_id');
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                $email = $response['email'];
                $order= Order::select('cust_name','shipping_addr','total_price','id')->where('id',$id)->first();
                if($order){
                    $name=$order->cust_name;
                    $addr= $order->shipping_addr;
                    $price= $order->price;
                    $id4= $order->id;
                }  
                
                Payment::insert([
                    'cust_id' => $id,
                    'r_payment_id' => $response['id'],
                    'method' => $response['method'],
                    'currency' => $response['currency'],
                    'user_email' => $response['email'],
                    'amount' => $response['amount'] / 100,
                    'json_response' => json_encode((array) $response)
                ]);
                $payment_method=$response['method'];
                $current_date_time = date('Y-m-d H:i:s');
                Order::where('id', $id)->update([
                    'order_date'=>$current_date_time,
                    'order_status' => "placed",
                    'payment_status' => "paid",
                    ' payment_type' => $response['method'],
                ]);   
                event(new paymentcapture($id,$current_date_time,$payment_method));
                $id4=DB::table('payments')->where('cust_id',$id)->value('r_payment_id');
                $id3= Custcart::where('cust_id',$user_id)->value('id');
                Cart::where('cart_id',$id3)->delete();
                EmailJob::dispatch($email,$name);
            } 
            catch (Exception $e) {
                return $e->getMessage();
            }
            return redirect()->back();
        }
    }
}
