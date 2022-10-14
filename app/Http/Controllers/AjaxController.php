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
use Pusher\PusherException;


class AjaxController extends Controller
{

    public function sendMsg(Request $request, $id){
//        require __DIR__ . '/vendor/autoload.php';

        try {
            $pusher = new \Pusher\Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                array('cluster' => env('PUSHER_APP_CLUSTER')));
        } catch (PusherException $e) {
        }

        $url = 'room-';
        $url.= $id;
        $pusher->trigger($url, 'my-event', array('message' => $request->msg));

        return response()->json([
            'id' => $id,
            'url' => $url
        ]);
    }
}
