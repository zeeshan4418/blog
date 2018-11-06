@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Contact US</h1>
        {!! Form::open(['url' => 'contact/submit', 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="row" style="padding: 80px 0px 80px 0px;">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{Form::text('name','', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{Form::text('email','',['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{Form::text('subject','',['class' => 'form-control', 'placeholder' => 'Enter Subject'])}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{Form::textarea('message','',['class' => 'form-control', 'placeholder' => 'Enter Message'])}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center">
                            {{Form::submit('Done',['class' => 'btn btn-success'])}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection