<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;
 
    public function __construct($mail)
    {
        $this->mail = $mail;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->from('sender@example.com')
                    ->view('layouts.mail');
        foreach($this->mail['files'] ?? [] as $file){
            $email->attach($file);
        }
        return $email;
    }
}