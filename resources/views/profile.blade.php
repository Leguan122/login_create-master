@extends('layouts.app')

@section('content')
    <div class="flex  items-center justify-center ">
        <div class="flex flex-col w-2/3 bg-slate-300">
            {{--        HEADER--}}
            <div class="flex flex-row m-2">
                <div class="w-3/12 aspect-square">
                    <img src="{{URL::asset('public/imgs/profile-m.png')}}">
                </div>
                <div class="h-auto w-8/12">
                    <textarea class="h-full w-full"></textarea>
                </div>

            </div>

            {{--        BODY--}}
            <div>
                <form>
                    <input type="text" value="name">
                </form>
            </div>
        </div>
    </div>

@endsection
