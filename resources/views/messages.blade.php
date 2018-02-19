@extends('layouts.app')
@section('content')
<h1>Messages</h1>
@if(count($messages) > 0)
    @foreach($messages as $message)
        <ul class="list-group">
            <li class="list-item">Name:{{$message->name}}</li>
            <li class="list-item">Email:{{$message->email}}</li>
            <li class="list-item">Message:{{$message->message}}</li>
        </ul>
    @endforeach
@endif
@endsection

@section('sidebar')
    @parent
    <p>this is appended to the side bar</p>
@endsection
