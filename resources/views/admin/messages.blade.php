@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="text-center"> Messages </h1>
        @if(count($messages) > 0)

            @foreach($messages as $message)
                <div class="well">
                    <h4> <span class="label label-info"> Name </span> {{ $message->name }}</h4>
                    <p> <span class="label label-warning"> Email </span> {{ $message->email }}</p>
                    <p>{{$message->message}}</p>
                    <span class="label label-danger">{{$message->created_at}}</span>
                </div>
            @endforeach

        @endif
    </div>
@endsection