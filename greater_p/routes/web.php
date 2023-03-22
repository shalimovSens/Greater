<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Authenticate;


Route::get('/', [MainController::class, 'viewIndex'])->name('index');

Route::get('/login', [MainController::class, 'viewLogin'])->middleware('guest')->name('log');
Route::post('/login', [LoginController::class, 'storeUser'])->middleware('guest')->name('login');

Route::get('/read', [LogController::class, 'viewLogs']);
Route::post('/create', [LogController::class, 'createLog']);

Route::get('/registration', [RegisterController::class, 'viewRegister'])->middleware('guest')->name('reg');
Route::post('/registration', [RegisterController::class, 'storeUser'])->middleware('guest')->name('storeUser');
Route::get('/logout', [RegisterController::class, 'logout'])->middleware('auth')->name('logout');




// Route::get('/request', [MainController::class, 'viewRequest']);
// Route::get('/ip', [MainController::class, 'viewIP']);
// Route::get('/logs', [MainController::class, 'viewLogs']);
// Route::get('/users', [MainController::class, 'viewUsers']);
// Route::get('/update', [MainController::class, 'updateLog']);
// Route::get('php', [MainController::class, 'goToShit']);

?>