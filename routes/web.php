<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::prefix('/student')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/create', [StudentController::class, 'create']);
    Route::post('/', [StudentController::class, 'store']);
    Route::get('/{id}', [StudentController::class, 'show']);
    Route::get('/{id}/edit', [StudentController::class, 'edit']);
    Route::put('/{id}', [StudentController::class, 'update']);
    Route::delete('/{id}', [StudentController::class, 'destroy']);
});

Route::prefix('/teacher')->group(function () {
    Route::get('/', [TeacherController::class, 'index']);
    Route::get('/create', [TeacherController::class, 'create']);
    Route::post('/', [TeacherController::class, 'store']);
    Route::get('/{id}/edit', [TeacherController::class, 'edit']);
    Route::patch('/{id}', [TeacherController::class, 'update']);
    Route::delete('/{id}', [TeacherController::class, 'destroy']);
});
