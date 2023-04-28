<?php
namespace App\Services;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Contracts\EmailService;

class SendgridEmailService implements EmailService
{
    public function send($to, $subject, $message)
    {
        // $validator = Validator::make(['email' => $to], [
        //     'email' => 'required|email',
        // ]);

        // if ($validator->fails()) {
        //     return $validator->errors();
        // }

        return "message sent to " . $to;
    }
}