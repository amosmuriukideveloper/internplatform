<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\InternshipsController;
use App\Http\Controllers\BusinessesController;
use App\Http\Controllers\StudentsController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


    Route::group(['prefix' => 'applications'], function () {
        Route::get('/', [ApplicationsController::class, 'index'])->name('applications.index');
        Route::post('/', [ApplicationsController::class, 'store'])->name('applications.store');
        Route::put('/{id}', [ApplicationsController::class, 'store'])->name('applications.update');
        Route::put('/{id}', [ApplicationsController::class, 'delete'])->name('applications.destroy');
        
    });

    Route::group(['prefix' => 'messages'], function () {
        Route::get('/', [MessagesController::class, 'index'])->name('messages.index');
        Route::post('/', [MessagesController::class, 'store'])->name('messages.store');
        Route::put('/{id}', [MessagesController::class, 'update'])->name('messages.update');
        Route::put('/{id}', [MessagesController::class, 'delete'])->name('messages.destroy');
        
    });

    Route::group(['prefix' => 'students'], function () {
        Route::get('/', [StudentsController::class, 'index'])->name('students.index');
        Route::post('/', [StudentsController::class, 'store'])->name('students.store');
        Route::put('/{id}', [StudentsController::class, 'update'])->name('students.update');
        Route::put('/{id}', [StudentsController::class, 'delete'])->name('students.destroy');
        
    });

    Route::group(['prefix' => 'internships'], function () {
        Route::get('/', [InternshipsController::class, 'index'])->name('applications.index');
        Route::post('/', [InternshipsController::class, 'store'])->name('applications.store');
        Route::put('/{id}', [InternshipsController::class, 'update'])->name('applications.update');
        Route::put('/{id}', [InternshipsController::class, 'delete'])->name('applications.destroy');
        
    });

    Route::group(['prefix' => 'businesses'], function () {
        Route::get('/', [BusinessesController::class, 'index'])->name('businesses.index');
        Route::post('/', [BusinessesController::class, 'store'])->name('businesses.store');
        Route::put('/{id}', [BusinessesController::class, 'update'])->name('businesses.update');
        Route::put('/{id}', [BusinessesController::class, 'delete'])->name('businesses.destroy');
        
    });

require __DIR__.'/auth.php';
