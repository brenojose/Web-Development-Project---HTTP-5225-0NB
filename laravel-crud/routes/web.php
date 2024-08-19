<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::delete('/todo/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');
Route::put('/todo/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/profiles/{id}/todos', [ProfileController::class, 'showWithTodos'])->name('profile.todos');
