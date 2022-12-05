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
            <input type="hidden"  name="id"  class="" id="id">
            <div class="col-sm-6">
                   <label for="name" class="col-sm-3 control-label">Name: </label>
                   <input type="text"  name="name"  class="form-control-plaintext col-sm-8 inline-block input" id="name">
                   <div class="col-sm-6 mx-auto">
                      <span class="error">{{ $errors->first('name') }}</span>
                   </div>  
                </div>
              <div class="col-sm-6">
                    <label for="username" class="col-sm-3 control-label">User Name: </label>
                    <input type="text"  name="username" class="form-control-plaintext col-sm-8 inline-block input" id="username" >
                    <div class="col-sm-6 mx-auto">
                      <span class="error">{{ $errors->first('username') }}</span>
                    </div>  
                </div> 
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                   <label for="email" class="col-sm-3 control-label">Email: </label>
                   <input type="email" name="email" class="form-control-plaintext col-sm-8 inline-block input" id="email">
                   <div class="col-sm-6 mx-auto">
                      <span class="error">{{ $errors->first('email') }}</span>
                   </div> 
            </div>
              <div class="col-sm-6">
                    <label for="password" class="col-sm-3 control-label">Password: </label>
                    <input type="password"  name="password" class="form-control-plaintext col-sm-8 inline-block input" id="password" >
                    <div class="col-sm-6 mx-auto">
                       <span class="error">{{ $errors->first('password') }}</span>
                    </div>  
            </div> 
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                   <label for="address" class="col-sm-3 control-label">Address: </label>
                   <input type="text"  name="address"  class="form-control-plaintext col-sm-8 inline-block input" id="address">
                   <div class="col-sm-6 mx-auto">
                      <span class="error">{{ $errors->first('address') }}</span>
                   </div> 
            </div>
              <div class="col-sm-6">
                   <label for="company" class="col-sm-3 control-label">Company: </label>
                   <input type="text"  name="company"  class="form-control-plaintext col-sm-8 inline-block input" id="company" > 
                   <div class="col-sm-6 mx-auto">
                       <span class="error">{{ $errors->first('company') }}</span>
                   </div>  
            </div> 
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                   <label for="mobile" class="col-sm-3 control-label">Mobile: </label>
                   <input type="text"  name="mobile" class="form-control-plaintext col-sm-8 inline-block input" id="mobile">
                   <div class="col-sm-6 mx-auto">
                       <span class="error">{{ $errors->first('mobile') }}</span>
                   </div> 
            </div>
              <div class="col-sm-6">
                   <label for="city" class="col-sm-3 control-label">City: </label>
                   <input type="text"  name="city" class="form-control-plaintext col-sm-8 inline-block input" id="city" >
                   <div class="col-sm-6 mx-auto">
                       <span class="error">{{ $errors->first('city') }}</span>
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