@extends('layouts.layout')
@section('content')
<style>
    .inline-block{
        display: inline-block;
    }
    .input{
        border:0.1px #d0c9c9 solid;
        border-radius: 9px 9px 9px 9px;
    }
    .form-page{
        background-color:#ffffff;
        margin: 0 auto;
        border:0.1px #d0c9c9 solid;
        min-height:100%
    }
    .row-page{
        min-height:600px
    }
    .error{
        color:red;
    }
</style>

<?php 
function data($val){
    echo "<pre>";
    print_r($val);
    echo "</pre>";
}

?>

       
<div class="row row-page">
  <div class="col-sm-12" style="background-color:#e4e6e9">
       <form method="post" action="/students/add">
        @csrf
        <div class="col-sm-10 form-page">
        <h2>User Add Form</h2>
        <div class="form-group row">
            <input type="hidden"  name="id"  class="" id="id" value="{{$student['id']}}">
            <div class="col-sm-6">
                   <label for="name" class="col-sm-3 control-label">Name: </label>
                   <input type="text"  name="name"  class="form-control-plaintext col-sm-8 inline-block input" id="name" value="{{old('name') ? old('name') : $student['name']}}">
                   <div class="col-sm-6 mx-auto">
                      <span class="error">{{$errors->first('name')}}</span>
                   </div>  
                </div>
              <div class="col-sm-6">
                    <label for="father_name" class="col-sm-3 control-label">Father Name: </label>
                    <input type="text"  name="father_name" class="form-control-plaintext col-sm-8 inline-block input" id="father_name" value="{{old('father_name') ? old('father_name') : $student['father_name']}}" >
                    <div class="col-sm-6 mx-auto">
                      <span class="error">{{$errors->first('father_name')}}</span>
                    </div>  
                </div> 
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                   <label for="email" class="col-sm-3 control-label">Email: </label>
                   <input type="email" name="email" class="form-control-plaintext col-sm-8 inline-block input" id="email" value="{{old('email') ? old('email') : $student['email']}}">
                   <div class="col-sm-6 mx-auto">
                      <span class="error">{{$errors->first('email')}}</span>
                   </div> 
            </div>
              <div class="col-sm-6">
                   <label for="contact_no" class="col-sm-3 control-label">Mobile: </label>
                   <input type="text"  name="contact_no" class="form-control-plaintext col-sm-8 inline-block input" id="contact_no" value="{{old('contact_no') ? old('contact_no') : $student['contact_no']}}">
                   <div class="col-sm-6 mx-auto">
                       <span class="error">{{$errors->first('contact_no')}}</span>
                   </div>  
            </div> 
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                   <label for="address" class="col-sm-3 control-label">Address: </label>
                   <input type="text"  name="address"  class="form-control-plaintext col-sm-8 inline-block input" id="address" value="{{old('address') ? old('address') : $student['address']}}" >
                   <div class="col-sm-6 mx-auto">
                      <span class="error">{{$errors->first('address')}}</span>
                   </div> 
            </div>
              <div class="col-sm-6">
                   <label for="city" class="col-sm-3 control-label">City: </label>
                   <input type="text"  name="city" class="form-control-plaintext col-sm-8 inline-block input" id="city" value="{{old('city') ? old('city') : $student['city']}}" >
                   <div class="col-sm-6 mx-auto">
                       <span class="error">{{$errors->first('city')}}</span>
                   </div> 
            </div> 
        </div>
         <div class="form-group row">
            <button type="submit" class="btn btn-success" style="margin: 0 auto">Submit</button>
         </div>
      </div>
    </form>
  </div>
</div>

@endsection