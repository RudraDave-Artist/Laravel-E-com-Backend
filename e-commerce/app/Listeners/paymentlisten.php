<?php

namespace App\Listeners;

use App\Events\paymentcapture;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Order;
class paymentlisten
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\paymentcapture  $event
     * @return void
     */
    public function handle(paymentcapture $event)
    {
        $id=$event->id;
        $current_date_time=$event->current_date_time;
        $payment_method=$event->payment_method;

        Order::where('id',$id)->update([
            'payment_status'=>'paid',
            'order_status'=>'placed',
            'order_date'=>$current_date_time,
            'payment_type'=>$payment_method
        ]);

    }
}
