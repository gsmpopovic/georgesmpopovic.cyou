<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = 'georgesmpopovic@gmail.com';
        $subject = ''; //"New mail from: $this->data['name'] @ $this->data['email']";
        $name = 'George Popovic';

        return $this->view('emails.index')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with(
                ['msg' => $this->data['message'],
                    'name' => $this->data["name"],
                    'phone' => $this->data["phone"],
                    "email" => $this->data["email"],
                ]
            );
    }
}
