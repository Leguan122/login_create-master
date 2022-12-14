<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getMail(){
        Log::info('getMail');
        return view('email');
    }

    public function sendMail(Request $request){

        Log::info('sendMail');
        $to      = 'kiss.adam.bs@gmail.com';
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: test@leguan.h10s.eu' . "\r\n" .
                    'Reply-To: test@leguan.h10s.eu' . "\r\n" .
                    'Return-Path: test@leguan.h10s.eu' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();


        $success =  mail($to, $subject, $message, $headers);



        return view('email');
    }

}
