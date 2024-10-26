<?php

namespace App\Jobs;

use App\Mail\SendMailDemo;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailJob implements ShouldQueue
{
    use Queueable;

    protected $sendMail;

    /**
     * Create a new job instance.
     */
    public function __construct($sendMail)
    {
        $this->sendMail = $sendMail;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        // $email = new SendMailDemo();
        // Mail::to($this->sendMail)->send($email);

        Mail::to('sakibcse282@gmail.com')->send(new SendMailDemo($this->sendMail));

    }

}
