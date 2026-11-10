<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');
});

// 認証済みユーザーのみアクセス可能、未認証ユーザーはログイン画面にリダイレクト
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
