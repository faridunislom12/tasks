<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TasksController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('tasks', [TasksController::class, 'index']);
Route::get('tasks/{id}', [TasksController::class, 'show']);
Route::post('tasks', [TasksController::class, 'store']);
Route::put('tasks/{id}', [TasksController::class, 'update']);
Route::delete('tasks/{id}', [TasksController::class, 'destroy']);

//Route::apiResource('comments', \App\Http\Controllers\API\System\CommentController::class);
