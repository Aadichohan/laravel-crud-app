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
        $users = User::paginate(2);
        return view("User/List", compact('users'));
    }

    public function add( $id = null){
        if($id){
            $user = new User;
            $usr  =  $user->find($id);
           //dd($usr->toArray());
           $user = $usr->toArray();
        }
        else{
            $user = null;
        }
        // dd($user);
        return view("User/UserForm",compact('user'));
    }

    public function saveUser(UserAddRequest $request){
        // dd($request->all());
        
        $user = new User;
       try {
            // $request->validate($request, $user->rules(), $user->message($request));
            // dd($request);
            DB::beginTransaction();
         if(!empty($request->id)){

               $usr = $user->find($request->id);
               $usr->update($request->all());
             
        }
        else{
                // dd($request->all());
               $obj =  User::create($request->all());
            }
            DB::commit();
           $status = '200';
            return redirect('/users')->with($status, 'Added Successfully');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect('/users')->with($th, 'Error');
        }
       dd($request->input());
       // $user = User::get()->toArray();
       // return view("User/UserForm");
    }
}
