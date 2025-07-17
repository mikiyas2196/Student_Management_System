<?php
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('create');
});


Route::get('/student/create', [StudentController::class, 'student.create']);
Route::post('/student', [StudentController::class, 'store'])->name('student.store');