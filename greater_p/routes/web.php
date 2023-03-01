<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/test', fn(Request $request) => view('test'));
Route::get('/', [MainController::class, 'viewIndex']);
Route::get('/test', [MainController::class, 'viewTest']);
Route::get('php', [MainController::class, 'goToShit']);
Route::get('/request', [MainController::class, 'viewRequest']);
Route::get('/ip', [MainController::class, 'viewIP']);
// Route::get('/request', [MainController::class, 'view']);