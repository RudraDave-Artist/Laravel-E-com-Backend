<?php

namespace App\Listeners;

use App\Events\Menu;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MenuListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Menu  $event
     * @return void
     */
    public function handle(Menu $event)
    {
        //
    }
}
