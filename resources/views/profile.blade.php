@extends('layouts.app')

@section('content')
    <div class="flex  items-center justify-center ">
        <div class="flex flex-col w-2/3 bg-slate-300">
            {{--        HEADER--}}
            <div class="flex flex-row m-2">
                <div class="w-3/12 aspect-square">
                    <img src="{{ asset('imgs/profile-m.png') }}">
                </div>
                <div class="h-auto w-8/12">
                    <textarea class="h-full w-full ml-2"></textarea>
                </div>

            </div>
            <hr>

            {{--        BODY--}}
            <div class="m-2">
                <form>
                    <div class="flex flex-row">

                    </div>
                    <label for="fname">Krstné meno:</label>
                    <input type="text" id="fname" name="fname">

                    <label for="lname">Priezvisko:</label>
                    <input type="text" id="lname" name="lname"><br><br>



                    <label for="sex">Pohlavie:</label><br>
                    <input list="sex">
                    <datalist id="sex">
                        <option value="Muž">
                        <option value="Žena">
                    </datalist>

                    <input type="submit" value="Submit">

                </form>
            </div>
        </div>
    </div>

@endsection
