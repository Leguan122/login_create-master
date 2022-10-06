@extends('layouts.app')

@section('content')
    <h1 class="h1" id="id">General</h1>

    <div class="flex w-11/12 m-8 h-full content-center">
        {{--  PEOPLE--}}
        <div class="flex flex-col  w-3/12 bg-slate-100 rounded-lg object-center m-6 overflow-y-scroll">
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>
            <button class="bg-blue-100 rounded-lg m-1 h-14">a</button>

        </div>
        {{--  CHAT--}}
        <div class="flex flex-col justify-between w-8/12 bg-slate-100  rounded-lg object-center mt-6 ml-8 ">
            <div class="overflow-y-scroll h-5/6">
                awdawd
            </div>

            <div class="m-6">
                <textarea id="textarea" class="w-2/3"> </textarea>
                <button id="sendMsg" class="bg-blue-300 ml-3 p-2 rounded-lg">Send</button>
            </div>
        </div>
    </div>



@endsection
