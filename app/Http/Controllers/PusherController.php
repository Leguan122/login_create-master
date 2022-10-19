<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PusherController extends Controller
{
    public function webhook(Request $request){
        Log::error('An informational message.');

        return response()->json(["sef"]);
    }
}
