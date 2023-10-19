@extends('layouts.app')

@section('mytitle', 'Add Task')

@section('bodyContent')

<form class="mt-3" method="POST" action="{{route('task.add')}}" >
@csrf
  <div class="form-group my-2">
    <label for="addTask">Add new task</label>
    <input type="text" class="form-control" id="addTask" name="task" placeholder="Add Task">
    <div class="text-danger">
      @error('task')
        {{$message}}
      @enderror
    </div>
  </div>
 
  <input type="submit" class="btn btn-primary" value="Add Task">
</form>


@endsection