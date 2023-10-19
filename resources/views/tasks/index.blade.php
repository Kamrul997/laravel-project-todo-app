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
    @foreach($tasks as $task)
      <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->task}}</td>
        <td>
          <div class="d-flex justify-content-between">
              <a href="{{route('task.delete',$task->id)}}" type="submit" class="btn btn-danger btn-small">Delete</a>
              <a href="{{route('task.edit',$task->id)}}" type="submit" class="btn btn-success btn-small">Edit</a>
          </div>
        </td>
      </tr>
    @endforeach
    
    
  </tbody>
</table>




@endsection