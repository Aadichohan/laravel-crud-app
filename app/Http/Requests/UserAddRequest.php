<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
            //
            'name'     => 'required|min:4|max:20',
            'username' => 'required|min:4|max:20',
            'email'    => 'required|min:12|max:20',
            'password' => 'required|min:8|max:12',
            'address'  => 'required|min:4|max:25',
            'company'  => 'required|min:4|max:20',
            'mobile'   => 'required|min:11|max:13',
            'city'     => 'required|min:4|max:20'
        ];

     $message = [
             'name.required'     => ['message' => 'Name is Required'],
             'username.max'      => ['message'  => 'Name max length is 20'],
             'username.required' => ['message' => 'User Name is Required'],
            //  'email'    => 'required',
            //  'password' => 'required',
         ];
    }
}
