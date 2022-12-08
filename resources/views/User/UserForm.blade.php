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

<div class="row row-page">
  <div class="col-sm-12" style="background-color:#e4e6e9">
       <form method="post" action="/users/add">
        @csrf
        <div class="col-sm-10 form-page">
        <h2>User Add Form</h2>
        <div class="form-group row">

            <input type="hidden"  name="id"  class="" id="id" value="{{ $user['id']}}" >

            <x-input type="text" name="name" id="name" value="{{old('name') ? old('name') : $user['name']}}"  error="{{$errors->first('name')}}"  label="Name" />

            <x-input type="text" name="username" id="username" value="{{old('username') ? old('username') : $user['username']}}"  error="{{$errors->first('username')}}"  label="User Name" />

        </div>
        <div class="form-group row">

            <x-input type="text" name="email" id="email" value="{{old('email') ? old('email') : $user['email']}}"  error="{{$errors->first('email')}}"  label="Email" />

            <x-input type="password" name="password" id="password" value="{{old('password') ? old('password') : $user['password']}}"  error="{{$errors->first('password')}}"  label="Password" />

        </div>
        <div class="form-group row">

            <x-input type="address" name="address" id="address" value="{{old('address') ? old('address') : $user['address']}}"  error="{{$errors->first('address')}}"  label="Address" />

            <x-input type="text" name="company" id="company" value="{{old('company') ? old('company') : $user['company']}}"  error="{{$errors->first('company')}}"  label="Company" />

        </div>
        <div class="form-group row">

            <x-input type="mobile" name="mobile" id="mobile" value="{{old('mobile') ? old('mobile') : $user['mobile']}}"  error="{{$errors->first('mobile')}}"  label="Mobile" />
                
            <x-input type="text" name="city" id="city" value="{{old('city') ? old('city') : $user['city']}}"  error="{{$errors->first('city')}}"  label="text" />

        </div>
         <div class="form-group row">
            <button type="submit" class="btn btn-success" style="margin: 0 auto">Submit</button>
         </div>
      </div>
    </form>
  </div>
</div>

@endsection