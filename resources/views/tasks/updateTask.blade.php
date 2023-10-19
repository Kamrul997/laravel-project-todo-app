@extends('layouts.app')

@section('mytitle', 'Add Task')

@section('bodyContent')

<form class="mt-3" method="post" action="{{route('task.update')}}">
@csrf
    <div class="form-group my-2">
        <label>Id</label>
        <input value ="{{$task->id}}" type="hidden" class="form-control" name="id">
        <input disabled value ="{{$task->id}}" type="text" class="form-control">
    </div>
  <div class="form-group my-2">
    <label>Update the task</label>
    <input type="text" value ="{{$task->task}}" name="task" class="form-control">
  </div>
 
  <input type="submit" class="btn btn-success" value="Update">
</form>


@endsection