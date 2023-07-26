<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');

    Route::get('/students', [StudentController::class, 'index'])->name('students.list');
    Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');
    Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
});


require __DIR__ . '/auth.php';
