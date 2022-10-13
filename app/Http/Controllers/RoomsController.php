<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function show_room(Request $request, $id){

        return view('room_template',['id' => $id]);
    }
}
