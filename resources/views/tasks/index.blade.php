@extends('layouts.app')

@section('mytitle', 'ToDo')

@section('bodyContent')

<div class="d-flex justify-content-between mt-3">
    <h2>All tasks</h2>
    <a href="" class="btn btn-outline-primary">Add New Task</a>
</div>

<table class="mt-3 table table-bordered">
  <thead>
    <tr>
      <th class="col-2">#</th>
      <th class="col-7">Tasks</th>
      <th class="col-3">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    
  </tbody>
</table>




@endsection