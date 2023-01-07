<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompanyStatusEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $id;

    /**
     * Create a new message instance.
     *
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'GGO Company Status';
        return $this->subject($subject)->view('emails.companyStatusEmail',['name'=>$this->name,'id'=>$this->id]);
    }
}
