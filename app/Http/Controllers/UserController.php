<?php

namespace App\Http\Controllers;
// echo error_reporting(E_ALL);
use App\Http\Requests\UserAddRequest;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index(){
        $user = User::get()->toArray();
        return view("User/List");
    }

    public function add(){
        $user = User::get()->toArray();
        return view("User/UserForm");
    }

    public function saveUser(UserAddRequest $request){
        dd($request->all());
        
        $user = new User;
      //  try {
            $request->validate($request, $user->rules(), $user->message($request));
            dd($request);
           // DB::beginTransaction();
         if(!empty($request->id)){
             
        }
        else{
                // dd($request->all());
               $obj =  User::create($request->all());
            }
           // DB::commit();
           // $status = '200';
            //return redirect('/users')->with($status, 'Added Successfully');
        // } catch (\Throwable $th) {
        //     DB::rollback();

        //     return redirect('/users')->with($th, 'Error');
        // }
     //   dd($request->input());
       // $user = User::get()->toArray();
       // return view("User/UserForm");
    }
}
