@extends('layouts.app')

@section('mytitle', 'Add Task')

@section('bodyContent')

<form class="mt-3" action="">
@csrf
  <div class="form-group my-2">
    <label for="addTask">Add new task</label>
    <input type="text" class="form-control" id="addTask" placeholder="Add Task">
  </div>
 
  <a href="" type="submit" class="btn btn-primary">Add</a>
</form>


@endsection