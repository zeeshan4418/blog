<?php

namespace App\Http\Controllers;

use App\City;
use App\Registeration;
use App\User;
use Illuminate\Http\Request;
use App\State;
use App\Http\Requests\UserCreate;

class RegistrationController extends Controller
{

    public function create(UserCreate $userCreate){

        /*$this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'cnic_no' => 'required|unique:users',
            'mobile_no' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'confirmPassword' => 'required||same:password'
        ]);*/

        /*$register = new User;
        $register->first_name = $request->input('first_name');
        $register->last_name = $request->input('last_name');
        $register->father_name = $request->input('father_name');
        $register->cnic_no = $request->input('cnic_no');
        $register->mobile_no = $request->input('mobile_no');
        $register->date_of_birth = $request->input('date_of_birth');
        $register->gender = $request->input('gender');
        $register->religion = $request->input('religion');
        $register->country_id = $request->input('country_id');
        $register->state_id = $request->input('state_id');
        $register->city_id = $request->input('city_id');
        $register->address = $request->input('address');
        $register->email = $request->input('email');
        $register->password = $request->input('password');
        $register->save();*/

        $data = $userCreate->except(['_token','confirmPassword']);
        User::create($data);

        return redirect('/register')->with('success','New User Register Successfully');
    }

    public function getStates(Request $request)
    {
        $country_id = $request->country_id;
        $state = State::where('country_id','=',$country_id)->get();
        return response()->json($state);
    }

    public function getCities(Request $request)
    {
        $state_id = $request->state_id;
        $city = City::where('state_id','=',$state_id)->get();
        return response()->json($city);

    }

}
