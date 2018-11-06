@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">About US</h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p>
                    This is about us page
                </p>
            </div>
            <div class="col-md-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
@endsection