@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/receive_general_room.js') }}" defer></script>
    <script>
        let id = "{{$id}}"
        // Enable pusher logging - don't include this in production
        //Pusher.logToConsole = true;

        let pusher = new Pusher('d3086f8c53c171b03902', {
            cluster: 'eu'
        });

        let room = "room-";
        let channel = pusher.subscribe(room.concat("{{$id}}"));
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
            getData();
        });
    </script>
    <h1 class="h1" id="id">General</h1>

    <div class="flex w-11/12 m-8 h-full content-center">
        {{--  PEOPLE--}}
        <div class="flex flex-col  w-3/12 bg-slate-100 rounded-lg object-center m-6 overflow-y-scroll">
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">{{$id}}</button>

        </div>
        {{--  CHAT--}}
        <div class="flex flex-col justify-between w-8/12 bg-slate-100  rounded-lg object-center mt-6 ml-8 ">
            <div id="messages_block" class="overflow-y-scroll h-5/6 ml-3">

            </div>

            <div class="flex m-6">
                <textarea id="textarea" class="w-11/12" maxlength="255"> </textarea>
                <button id="sendMsg" class="bg-blue-300 ml-3 p-2 rounded-lg">Send</button>
            </div>
        </div>
    </div>



@endsection
