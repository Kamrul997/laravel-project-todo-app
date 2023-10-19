<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
class TaskController extends Controller
{

    public function index(){
        $tasks = tasks::all();
        $data = compact('tasks');
        return view('tasks.index')->with($data);
    }

    public function store(Request $request){
        
        $request->validate(
            [
                'task' => 'required'
            ]
            );
        $task = new tasks;
        $task->task=$request['task'];
        $task->save();
        return redirect(route("todo.home"));
        // dd("ok");
    }

    public function delete($id){
        tasks::find($id)->delete();
        return redirect(route("todo.home"));
    }

    public function edit($id){
        $task = tasks::find($id);
        $data = compact('task');
        return view('tasks.updateTask')->with($data);
    }

    public function update(Request $request){
        // dd($request->all());

        $request->validate(
            [
                'task' => 'required'
            ]
            );

        $id = $request['id'];
        $task = tasks::find($id);
        $task->task=$request['task'];
        $task->save();
        
        return redirect(route("todo.home"));
    }
}
