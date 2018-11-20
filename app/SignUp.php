<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SignUp extends Model
{
    //
    protected $table = 'sign_up';

    protected $fillable = [
        'user_name', 'user_email', 'user_password'
    ];

}
