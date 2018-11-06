<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'cnic_no' => 'required|unique:users',
            'mobile_no' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'confirmPassword' => 'required||same:password'
        ];
    }
}
