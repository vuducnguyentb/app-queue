<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    public function sendEmail()
    {
        //chạy thằng job
        dispatch(new SendEmailJob());

        echo 'email sent';
    }
}
