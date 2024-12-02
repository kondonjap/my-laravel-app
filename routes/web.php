<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello Laravel';
});

Route::get('/todo', [TodoController::class,'index']);

Route::get('/tasks', [TaskController::class,'index']);

Route::post('/tasks', [TaskController::class,'store']);

// タスク作成フォーム表示
Route::get('/create', [TaskController::class, 'create']);

// タスクの詳細表示
Route::get('/tasks/{id}', [TaskController::class, 'show']);

// 編集フォームの表示
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);

// タスクの更新
Route::put('/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);