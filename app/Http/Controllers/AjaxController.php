<?php

namespace App\Http\Controllers;

use App\Models\RoomGeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;


class AjaxController extends Controller
{

    public function sendMsg(Request $request, $id){
//        require __DIR__ . '/vendor/autoload.php';

//        $pusher = new \Pusher\Pusher(
//            env('PUSHER_APP_KEY'),
//            env('PUSHER_APP_SECRET'),
//            env('PUSHER_APP_ID'),
//            array('cluster' => env('PUSHER_APP_CLUSTER')));
//
//        $pusher->trigger('my-channel', 'my-event', array('message' => 'hello world'));

        return response()->json([
            'id' => $id
        ]);
    }
}
