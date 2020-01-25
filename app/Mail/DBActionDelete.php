<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DBActionDelete extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $name;
    private $lastname;

    public function __construct($name, $lastname)
    {
        $this-> Name = $name;
        $this -> Lastname = $lastname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        $name = $this -> Name;
        $lastname =  $this -> Lastname;
        return $this->view('mails.deleteDoc', compact('name', 'lastname'));
    }
}
