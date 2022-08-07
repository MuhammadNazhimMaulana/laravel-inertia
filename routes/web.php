<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PagesController, UserController};

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

Route::get('/home', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

// User
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);

    // Create
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/create', [UserController::class, 'store']);

    // Create
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    
    // Get Detail
    Route::get('/{user}', [UserController::class, 'show']);
    
    // Delete Data
    Route::delete('/{id}', [UserController::class, 'delete']);
});