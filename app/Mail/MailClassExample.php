<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class MailClassExample extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


     private $user ;
    public function __construct(stdClass $user)
    {
        //
        $this->user = $user ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Mail de teste');
        $this->to($this->user->email,$this-> user->name);
        // return $this->view('Mail.mail_example', ['user'=>$this->user]);
        //Porcause de  php artisan vendor:publish --tag=laravel-mail
        return $this->markdown('Mail.mail_example', ['user'=>$this->user]);
    }
}
