<?php

namespace App\Http\Controllers;
use App\Contracts\MyInterface;

use Illuminate\Http\Request;
use App\Contracts\EmailService;
use App\Http\Requests\SendEmailRequest;

class ProviderController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function mail(Request $request)
    {
        return view('sendmail');
    }

    public function sendEmail(SendEmailRequest $request)
    {
       

        $message = $this->emailService->send($request->input('email'), $request->input('subject'), $request->input('message'));
        return view('sendmail', ['message' => $message]);

    }

    
}
