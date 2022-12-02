<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';

     protected $fillable = [
        'id',
        'name',
        'username',
        'email',
        'password',
        'address',
        'company',
        'mobile',
        'city',
        // "updated_at"
    ];

    public function rules(){
         $rules = [
             'name'     => 'required|max:20',
             'username' => 'required|max:22',
             'email'    => 'required',
             'password' => 'required',
         ];
         return $rules;
    }
    public function message($request){
         $message = [
             'name.required'     => ['message' => 'Name is Required'],
             'name.max'          => ['message'  => 'Name max length is 20'],
             'username.required' => ['message' => 'User Name is Required'],
            //  'email'    => 'required',
            //  'password' => 'required',
         ];
        //  dd($message);
         return $message;
    }
}
