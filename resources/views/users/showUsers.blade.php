@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Show User</h1>
        <div class="row" style="padding-top: 50px">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <a href="{{ route('user.create') }}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Create New User</a>
            <br><hr>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <th> ID </th>
                    <th> Full Name </th>
                    <th> Father Name </th>
                    <th> Gender </th>
                    <th> Mobile No </th>
                    <th> Actions </th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td> {{$user->id}} </td>
                            <td>{{$user->first_name." ".$user->last_name}}</td>
                            <td>{{ $user->father_name }}</td>
                            <td> {{ $user->gender }} </td>
                            <td> {{ $user->mobile_no }} </td>
                            <td>
                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-success"> <i class="fa fa-edit"></i></a>
                                <a href="{{ url('/user',$user->id) }}" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                <a href="{{url('/user/profile',$user->id)}}" class="btn btn-info"> <i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection