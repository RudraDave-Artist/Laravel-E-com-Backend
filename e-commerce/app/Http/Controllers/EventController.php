<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PodcastProcessed;

class EventController extends Controller
{
    
    public function event(){
        
        event(new PodcastProcessed());
    }
}
