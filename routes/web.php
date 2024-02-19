<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\DashboardController;

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
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticating']);

Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'registerprocess']);

Route::get('book-form', [bookController::class, 'form']);
Route::post('book-form', [bookController::class, 'formpost']);

Route::get('logout', [AuthController::class, 'logout']);

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('profile', [UserController::class, 'profile'])->middleware('auth');

Route::post('/edit/{id}', [UserController::class, 'tampildata']);
Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');

Route::get('/page', [DashboardController::class, 'index']);
Route::get('components-alerts', [bookController::class, 'index']);
Route::get('tables-data', [UserController::class, 'index']);
Route::get('tables-buku', [bookController::class, 'buku']);
Route::get('/update', [UserController::class, 'update']);
Route::get('/update/{id}', [UserController::class, 'edit']);
Route::post('/update/{id}', [UserController::class, 'post']);

Route::get('/users-profile', [UserController::class, 'userprofile']);
Route::get('/admin-profile', [UserController::class, 'adminprofile']);

