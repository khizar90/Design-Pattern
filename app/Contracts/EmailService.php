<?php
namespace App\Contracts;

interface EmailService
{
    public function send($to, $subject, $message);
}