<?php
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('create');
});


Route::get('/student/create', [StudentController::class, 'student.create']);
Route::post('/student', [StudentController::class, 'store'])->name('student.store');

Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
