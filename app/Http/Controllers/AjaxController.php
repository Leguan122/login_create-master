<?php

namespace App\Http\Controllers;

use App\Models\RoomGeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AjaxController extends Controller
{

    public function ajaxRequest()
    {
        return view('ajaxRequest');
    }


    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        $user = auth()->user();

        Log::info($input);

        $msg = RoomGeneral::create([
            'userid' => $user->id,
            'message' => $request->msg
        ]);

        return response()->json([
            'success'=>'Got Simple Ajax Request.',
            'name'=>'edesfefsef',
            'user'=>$user
        ]);
    }
}
