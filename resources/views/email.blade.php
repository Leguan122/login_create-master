@extends('layouts.app')

@section('content')
<form action="/email" method="post">
    @csrf
    <input type="text">
    <input type="submit">
</form>


@endsection



