<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::post('/store-task', function (Request $request))->name("");

Route::get('/', [TaskController::class,'index'])->name("todo.home");
Route::get('/addTask', function () {
    return view('tasks.addTask');
});
Route::get('/editTask/{id}', [TaskController::class, 'edit'])->name("task.edit"); 
Route::get('/deleteTask/{id}',[TaskController::class,'delete'])->name("task.delete");

Route::post('/updateTask',[TaskController::class,'update'])->name("task.update");
Route::post('/addnewTask',[TaskController::class,'store'])->name("task.add");