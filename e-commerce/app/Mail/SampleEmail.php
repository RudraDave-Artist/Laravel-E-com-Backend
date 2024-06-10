<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
class SampleEmail extends Mailable
{
    use Queueable, SerializesModels;
    /**f
     * Create a new message instance.
     *
     * 
     * @return void
     */
    public $email;
    public $name;
    public function __construct($email,$name)
    {
        $this->email= $email;
        $this->name= $name;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Payment Confirmation')
            ->view('view.name');
    }
}
