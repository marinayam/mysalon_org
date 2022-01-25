<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentSendmail extends Mailable
{
    use Queueable, SerializesModels;
    
    private $name01;
    private $name02;
    private $tel;
    private $email;
    private $date;
    private $time;
    private $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->name01 = $inputs['name01'];
        $this->name02 = $inputs['name02'];
        $this->tel = $inputs['tel'];
        $this->email = $inputs['email'];
        $this->perm = $inputs['perm'];
        $this->extension = $inputs['extension'];
        $this->eyebrow = $inputs['eyebrow'];
        $this->option = $inputs['option'];
        $this->date = $inputs['date'];
        $this->time = $inputs['time'];
        $this->comment  = $inputs['comment'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(config('mail.from.address'),'Lys.kichijoji')
            ->bcc(config('mail.from.address'))
            ->subject('【リース 吉祥寺】お問い合わせありがとうございます')
            ->view('appointment.mail')
            ->with([
                'name01' => $this->name01,
                'name02' => $this->name02,
                'email' => $this->email,
                'tel' => $this->tel,
                'perm' => $this->perm,
                'extension' => $this->extension,
                'eyebrow' => $this->eyebrow,
                'option' => $this->option,
                'comment'  => $this->comment,
            ]);
    }
}
