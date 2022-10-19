<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getMail(){
        return view('email');
    }

    public function sendMail(Request $request){

        $to      = 'leguan25@google.com';
        $subject = 'the subject';
        $message = 'hello';
        $headers = 'From: test@leguan.h10s.eu' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);


        return view('email.blade.php');
    }

}
