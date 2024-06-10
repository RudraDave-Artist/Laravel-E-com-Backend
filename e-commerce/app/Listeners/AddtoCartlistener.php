<?php

namespace App\Listeners;

use App\Events\AddtoCart;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddtoCartlistener
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
     * @param  \App\Events\AddtoCart  $event
     * @return void
     */
    public function handle(AddtoCart $event)
    {
        $name=$event->name;
        
        
    }
}
