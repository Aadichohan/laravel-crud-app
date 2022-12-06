@extends('layouts.layout')
@section('content')
<?php //dd($user); ?>
<div class="row">
  <div class="col-md-6">
    <a class="btn btn-success" href="/students/add">Add New</a>
  </div>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($students as $student)
        <th scope="row">{{ $student->name }}</th>
        <th>{{ $student->father_name }}</th>
        <th>{{ $student->email }}</th>
        <th>{{ $student->contact_no }}</th>
        <th>{{ $student->address }}</th>
        <th>{{ $student->city }}</th>
        <th><a class="btn btn-success" href="/students/edit/{{ $student->id }}"> Edit </a></th>
    </tr>
    @endforeach

  </tbody>
</table>
{!! $students->links() !!}
@endsection