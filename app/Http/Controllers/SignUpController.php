<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUp;

class SignUpController extends Controller
{
    public function index(){

        return view('signup');
    }

    public function create(SignUp $signUp)
    {
        $data = $signUp->except(['_token','confirmPassword']);
        \App\SignUp::create($data);

        return redirect('/login')->with(['success','Sign Up Successfully']);
    }

}
