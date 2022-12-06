@extends('layouts.layout')
@section('content')
<?php //dd($user); ?>
<div class="row">
  <div class="col-md-6">
    <a class="btn btn-success" href="/users/add">Add New</a>
  </div>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Company</th>
      <th scope="col">Mobile</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($users as $user)
        <th scope="row">{{ $user->name }}</th>
        <th>{{ $user->username }}</th>
        <th>{{ $user->email }}</th>
        <th>{{ $user->address }}</th>
        <th>{{ $user->company }}</th>
        <th>{{ $user->mobile }}</th>
        <th>{{ $user->city }}</th>
        <th><a class="btn btn-success" href="/users/edit/{{ $user->id }}"> Edit </a></th>
    </tr>
    @endforeach

  </tbody>
</table>
{!! $users->links() !!}
@endsection