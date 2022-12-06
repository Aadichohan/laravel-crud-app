<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $fillable = [
     'id',
     'name',
     'father_name',
     'email',
     'contact_no',
     'address',
     'city',
     'created_at',
     'updated_at',

    ];

    public function rules($request){

        $rules = [
            'name'        => 'required|min:4|max:20',
            'father_name' => 'required|min:4|max:20',
            'email'       => 'required|min:7|max:20',
            'contact_no'  => 'required|min:11|max:13',
            'address'     => 'required|min:4|max:25',
            'city'        => 'required|min:4|max:20'
        ];
        return $rules;
    }

    public function messages(){
             $message = [

                'name.required'        => 'Name is Required',
                'name.min'             => 'Name min length is 4',
                'name.max'             => 'Name max length is 20',

                'father_name.required' => 'Father Name is Required',
                'father_name.min'      => 'Name min length is 4',
                'father_name.max'      => 'Name max length is 20',                

                'email.required'       => 'Email is Required',
                'email.min'            => 'Email min length is 7',
                'email.max'            => 'Email max length is 20',                

                'contact_no.required'  => 'Contact No is Required',
                'contact_no.min'       => 'Contact No min length is 11',
                'contact_no.max'       => 'Contact No max length is 13',

                'address.required'     => 'Address is Required',
                'address.min'          => 'Address min length is 4',
                'address.max'          => 'Address max length is 25',                

                'city.required'        => 'City is Required',
                'city.min'             => 'City min length is 4',
                'city.max'             => 'City max length is 20',
                   
                ];
         return $message;
    }
}
