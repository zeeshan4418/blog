<?php

namespace App\Http\Controllers;

use App\country;
use App\State;
use App\City;

class PageController extends Controller
{
    public function getHome(){

        return view('main');
    }
    public function getAbout(){

        return view('about');
    }
    public function getContact(){

        return view('contact');
    }
    public function getRegisteration(){

        $country = Country::all()->toArray();
        $data['country'] = $country;
        $state = State::all()->toArray();
        $data['state'] = $state;
        $city = City::all()->toArray();
        $data['city'] = $city;
        return view('register',$data);
    }
}
