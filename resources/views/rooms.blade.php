@extends('layouts.app')

@section('content')
    <h1 class="h1" id="id">Rooms</h1>

    <div class="flex justify-center">
        <div class="bg-slate-100 w-2/3 rounded-lg object-center left-1/2 mt-6">
            <div class="grid grid-cols-4 gap-4 pr-3 pb-3">
                <a href="{{ url('/rooms/general') }}" class="bg-slate-200 rounded-lg mt-3 ml-3 pt-8 pb-8 text-center hover:bg-slate-300">General</a>

                <a href="{{ url('/rooms/1') }}" class="bg-slate-200 rounded-lg mt-3 ml-3 pt-8 pb-8 text-center hover:bg-slate-300">1</a>
                <a href="" class="bg-slate-200 rounded-lg mt-3 ml-3 pt-8 pb-8 text-center hover:bg-slate-300">2</a>
                <a href="" class="bg-slate-200 rounded-lg mt-3 ml-3 pt-8 pb-8 text-center hover:bg-slate-300">3</a>
                <a href="" class="bg-slate-200 rounded-lg mt-3 ml-3 pt-8 pb-8 text-center hover:bg-slate-300">4</a>
            </div>
        </div>
    </div>


@endsection
