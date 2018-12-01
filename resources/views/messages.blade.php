@extends('layouts.app')

@section('content')

<h1>Messages</h1>
@if(count($messages) > 0)
    
    @foreach($messages as $message)
        <ul class="list-group">
            <li class="list-group-item"><h2>{{$message->name}}</h2></li>
            <li class="list-group-item">{{$message->email}}</li>
            <li class="list-group-item"><p>{{$message->message}}</p></li>
        </ul>
        <br>
    @endforeach
    
@endif

@endsection
    
