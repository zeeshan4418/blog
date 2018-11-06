<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdate;
use Illuminate\Http\Request;
use App\City;
use App\Registeration;
use App\User;
use App\State;
use App\Http\Requests\UserCreate;
use App\country;
use App\Http\Controllers\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('users.showUsers',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pageName'] = "Register User";
        $country = Country::all()->toArray();
        $data['country'] = $country;
        return view('register',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreate $userCreate)
    {
        $data = $userCreate->except(['_token','confirmPassword']);
        User::create($data);
        return redirect('/register')->with('success','New User Register Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id','=',$id)->first();
        return view('users.showProfile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::all()->toArray();
        $data['country'] = $country;
        $data['pageName'] = "Update User";
        $data['user'] = User::find($id);
        $states = State::all()->toArray();
        $data['states'] = $states;
        $cities = City::all()->toArray();
        $data['cities'] = $cities;
        return view('users.editUser',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UserUpdate $userUpdate)
    {
        $data = $userUpdate->except(['_token']);
        //update post data
        User::where('id', $id)->update($data);
        //store status message
        \Session::flash('success', 'User updated successfully!');
        return redirect()->route('user.index');

        echo $id;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/user')->with('success','User Deleted Successfully');
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
