<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\AdminCreate;

class SignUpController extends Controller
{
    public function index(){

        return view('signup');
    }

    public function create(AdminCreate $signUp)
    {
        $data = $signUp->except(['_token','confirmPassword']);
        Admin::create($data);
        return redirect('/login')->with(['success','Sign Up Successfully']);
    }

}
