<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Models\User;

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
    $tasks = Task::all();
    $users = User::all();

    return view('welcome', compact('tasks', 'users'));
});
