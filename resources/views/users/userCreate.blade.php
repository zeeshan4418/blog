@extends('layout.app')
<style>
    .text-area{
        height: 80px !important;
    }
</style>
@section('content')
    <div class="container">
        <h1 class="text-center">Register</h1>
        {!! Form::open(['url' => '/user', 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="row" style="padding-top: 80px;">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Enter Name"/>
                        </div>
                        <p class="text-danger">
                            @if($errors->has('first_name'))
                                {{ $errors->first('first_name') }}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" />
                        </div>
                        <p class="text-danger">
                            @if($errors->has('last_name'))
                                {{ $errors->first('last_name') }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Father Name</label>
                            <input type="text" class="form-control" name="father_name" placeholder="Enter Father Name" />
                        </div>
                        <p class="text-danger">
                            @if($errors->has('father_name'))
                                {{ $errors->first('father_name') }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CNIC</label>
                            <input type="text" class="form-control" name="cnic_no" placeholder="Enter CNIC" />
                        </div>
                        <p class="text-danger">
                            @if($errors->has('cnic_no'))
                                {{ $errors->first('cnic_no') }}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mobile No</label>
                            <input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile No" />
                        </div>
                        <p class="text-danger">
                            @if($errors->has('mobile_no'))
                                {{ $errors->first('mobile_no') }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="control-label" for="date">Date</label>
                                <input class="form-control" name="date_of_birth" placeholder="MM/DD/YYYY" type="date"/>
                            </div>
                        </div>
                        <p class="text-danger">
                            @if($errors->has('date_of_birth'))
                                {{ $errors->first('date_of_birth') }}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option>Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <p class="text-danger">
                            @if($errors->has('gender'))
                                {{ $errors->first('gender') }}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Religion</label>
                            <input type="text" class="form-control" name="religion" placeholder="Enter Religion" />
                        </div>
                        <p class="text-danger">
                            @if($errors->has('religion'))
                                {{ $errors->first('religion') }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Select Country</label>
                            <select id="country_id" name="country_id" class="form-control">
                                <option>Select</option>
                                @foreach($country as $cn)
                                    <option value="{{ $cn['id'] }}">{{ $cn['country_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <p class="text-danger">
                            @if($errors->has('country_id'))
                                {{ $errors->first('country_id') }}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Select Country</label>
                            <select id="state_id" name="state_id" class="form-control">
                                <option>Select</option>
                            </select>
                        </div>
                        <p class="text-danger">
                            @if($errors->has('state_id'))
                                {{ $errors->first('state_id') }}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Select Country</label>
                            <select id="city_id" name="city_id" class="form-control">
                                <option>Select</option>
                            </select>
                        </div>
                        <p class="text-danger">
                            @if($errors->has('city_id'))
                                {{ $errors->first('city_id') }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" placeholder="Enter Address"></textarea>
                        </div>
                        <p class="text-danger">
                            @if($errors->has('address'))
                                {{ $errors->first('address') }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email Address" />
                        </div>
                        <p class="text-danger">
                            @if($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" />
                        </div>
                        <p class="text-danger">
                            @if($errors->has('password'))
                                {{ $errors->first('password') }}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Enter Password" />
                        </div>
                        <p class="text-danger">
                            @if($errors->has('confirmPassword'))
                                {{ $errors->first('confirmPassword') }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="padding-top: 30px">
                        <div class="text-center">
                            <input type="submit" value="Submit" class="btn btn-primary" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('#date').datepicker({
            format: 'mm/dd/yyyy',
        });
        var row_div = "";
        $("#country_id").on('change',function(){
            var id = $("#country_id").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#state_id").html("");
            row_div = "<option>Select<option>";
            $.ajax({
                type: "POST",
                url: "{{ url('/getStates') }}",
                data: {country_id : id},
                success: function(result){
                    $.each(result, function(key,value){
                        row_div += "<option value='"+value.id+"'>"+value.state_name+"</option>";
                    });
                    $("#state_id").html(row_div);
                }
            })
        });

        $("#state_id").on('change',function(){
            var id = $("#state_id").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#city_id").html("");
            row_div = "<option>Select<option>";
            $.ajax({
                type: "POST",
                url: "{{ url('/getCities') }}",
                data: {state_id : id},
                success: function(result){
                    $.each(result, function(key,value){
                        row_div += "<option value='"+value.id+"'>"+value.city_name+"</option>";
                    });
                    $("#city_id").html(row_div);
                }
            })
        });
    })
</script>
@endsection