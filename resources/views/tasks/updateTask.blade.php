@extends('layouts.app')

@section('mytitle', 'Add Task')

@section('bodyContent')

<form class="mt-3" action="">
@csrf
    <div class="form-group my-2">
        <label for="addTask">Id</label>
        <input disabled type="text" class="form-control" id="addTask">
    </div>
  <div class="form-group my-2">
    <label for="addTask">Update the task</label>
    <input type="text" class="form-control" id="addTask">
  </div>
 
  <a href="" type="submit" class="btn btn-success">Update</a>
</form>


@endsection