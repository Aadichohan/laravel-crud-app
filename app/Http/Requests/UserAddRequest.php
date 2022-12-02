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
            'name' => 'required',
            'username' => 'required|max:3'
        ];

     $message = [
             'name.required'     => ['message' => 'Name is Required'],
             'username.max'          => ['message'  => 'Name max length is 20'],
             'username.required' => ['message' => 'User Name is Required'],
            //  'email'    => 'required',
            //  'password' => 'required',
         ];
    }
}
