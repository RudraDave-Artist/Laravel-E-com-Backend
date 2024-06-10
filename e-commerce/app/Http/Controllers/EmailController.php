<?php

namespace App\Http\Controllers;
use App\Jobs\EmailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleEmail;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail(){
        $email="rudra17816@gmail.com";
        $name="Rudra";
        $addr="as.,mdfn";
        $price="909";
        $id4=",amsdnf";
        // EmailJob::dispatch($email,$name,$addr,$price,$id4);
        Mail::to('rahulmitra23@gmail.com')->send(new SampleEmail($email,$name));
        return "Email send successfully!";
    }   
}
