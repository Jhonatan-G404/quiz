<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\User\AnswerController;
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

// Default welcome page
Route::get('/', function () {
    return view('welcome');
});

// Role-based dashboard redirection
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
    }
    return redirect()->route('questions.list'); // Redirect users to question answering
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes (common to all authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\QuestionController::class, 'index'])
        ->name('admin.dashboard'); // Admin dashboard displays the question list

    // Other admin-specific routes
    Route::get('questions/create', [\App\Http\Controllers\Admin\QuestionController::class, 'create'])
        ->name('questions.create');
    Route::post('questions', [\App\Http\Controllers\Admin\QuestionController::class, 'store'])
        ->name('questions.store');
    Route::get('questions/{question}/edit', [\App\Http\Controllers\Admin\QuestionController::class, 'edit'])
        ->name('questions.edit');
    Route::put('questions/{question}', [\App\Http\Controllers\Admin\QuestionController::class, 'update'])
        ->name('questions.update');
    Route::delete('questions/{question}', [\App\Http\Controllers\Admin\QuestionController::class, 'destroy'])
        ->name('questions.destroy');

    Route::get('questions/{question}/answers', [\App\Http\Controllers\Admin\QuestionController::class, 'showAnswers'])
        ->middleware(['auth', 'role:admin'])
        ->name('questions.answers');

    Route::get('reports/answers', [\App\Http\Controllers\Admin\ReportController::class, 'index'])
        ->middleware(['auth', 'role:admin'])
        ->name('reports.answers');


});

// User routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');

    // Define routes specific to users answering questions
    Route::get('questions', [\App\Http\Controllers\User\AnswerController::class, 'index'])
        ->name('questions.list');
    Route::post('questions/{question}/answer', [\App\Http\Controllers\User\AnswerController::class, 'store'])
        ->name('answers.store');
    Route::patch('answers/{answer}', [\App\Http\Controllers\User\AnswerController::class, 'update'])
        ->name('answers.update');
});

// Authentication routes (login, register, etc.)
require __DIR__ . '/auth.php';
