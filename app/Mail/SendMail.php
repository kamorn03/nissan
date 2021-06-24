<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $type;
    public $time;
    public $phone;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$type,$time,$phone)
    {
        $this->name = $name;
        $this->type = $type;
        $this->time = $time;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->name;
        return $this->view('mail', compact('name','type','time','phone'))->subject('การเก็บข้อมูลผู้ใช้');
    }
}
