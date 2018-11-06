<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'cnic_no',
        'mobile_no',
        'date_of_birth',
        'gender',
        'religion',
        'country_id',
        'state_id',
        'city_id',
        'address',
        'email',
        'password',
    ];
}
