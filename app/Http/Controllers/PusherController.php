<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Pusher\PusherException;

class PusherController extends Controller
{
    public function webhook(Request $request){
        Log::info($request);

        try {
            $pusher = new \Pusher\Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                array('cluster' => env('PUSHER_APP_CLUSTER')));

            $url = 'room-general';

            $pusher->trigger($url, 'my-event', array('time' => Carbon::now()));
        } catch (PusherException $e) {
        }
    }
}
