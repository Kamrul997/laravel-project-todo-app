@extends('layouts.app')

@section('mytitle', 'ToDo')

@section('bodyContent')

<div class="d-flex justify-content-between mt-3">
    <h2>All tasks</h2>
    <a href="/addTask" class="btn btn-outline-primary">Add New</a>
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
      <td>1</td>
      <td>Otto</td>
      <td>
        <div class="d-flex justify-content-between">
            <a href="" type="submit" class="btn btn-danger btn-small">Delete</a>
            <a href="/updateTask" type="submit" class="btn btn-success btn-small">Edit</a>
        </div>
      </td>
    </tr>
    
  </tbody>
</table>




@endsection