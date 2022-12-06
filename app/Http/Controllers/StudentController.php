<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //

    public function index(){

        $students = Student::paginate(2);
        // dd($students);
        return view('Student/List',   compact('students'));
    }

    public function add($id = null){

        if($id){
            $mdlStudent = new Student;
            $student  =  $mdlStudent->find($id);
           //dd($usr->toArray());
           $student = $student->toArray();
        }
        else{
            $student = null;
        }
// dd($student);
        return view('Student/StudentForm', compact('student'));
    }    

    public function saveStudent(Request $request){

        $student = new Student;

        $rules   = $student->rules($request);
        $message = $student->messages();
        $request->validate($student->rules($request),$message);

         if(!empty($request->id)){
            $std = $student->find($request->id);
            $std->update($request->all());
        }
        else{ 
                // dd($request->all());
                Student::create($request->all());
            }
            $status = '200';
            return redirect('/students')->with($status, 'Added Successfully');
        // return view('Student/List');
    }
}
