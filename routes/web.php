<?php

use App\Http\Livewire\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Logs;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Reports;


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

// Route::view('/', 'welcome')->name('home')->middleware('auth:sanctum');

Route::get('/login', Login::class)->name('login');

Route::middleware('nauth')->group(function () {
    // Route::view('/', 'welcome')->name('home');
    Route::get('/', Dashboard::class)->name('home');
    Route::get('/call', Logs::class)->name('logs');
    Route::get('/reports', Reports::class)->name('report');

});


