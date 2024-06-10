<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleEmail;
use Illuminate\Support\Facades\DB;


class EmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $email;
    private $name;
    // private $addr;
    // private $price;
    // private $id4;
    // // protected $data;
    /**
    
     * 
     * Create a new job instance.
      * 
     * The recipient email address
     * @return void
     */
    public function __construct($email,$name)
    {
        $this->email = $email;
        $this->name = $name;
        // $this->addr = $addr;
        // $this->price = $price;
        // $this->id4 = $id4;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer): void
    {
        $email = $this->email;
        $name = $this->name;
        // $addr = $this->addr;
        // $price = $this->price;
        // $id4 = $this->id4;
        Mail::to($email)->send(new SampleEmail($email,$name));
        // $data = [
        //     'email' => $email,
        //     'name' => $name,
        //     'addr' => $addr,
        //     'price' => $price,
        //     'id4' => $id4,
        // ];
        

        // $mailer->send('view.name', compact('data'), function ($message) use ($email) {
        //     $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
        //     $message->subject("Payment Done");
        //     $message->to($email);
        // });
    }
}