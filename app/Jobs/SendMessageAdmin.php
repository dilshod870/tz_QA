<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;

class SendMessageAdmin implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email,$data)
    {
        $this->email = $email;
        $this->data = json_decode(json_encode($data), true);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send('emails.admin', ['data' => $this->data], function($message) {
            $message->to($this->email, '')->subject('У вас новая заявка');
        });
    }
}
