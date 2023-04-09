<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::prefix('members')->group(function (){
    Route::get('register', [Controllers\membersController::class, 'register'] );
    Route::get('login', [Controllers\membersController::class, 'login']);
    Route::get('forgetPassword', [Controllers\membersController::class, 'forgetPassword']);
    Route::post('loggedIn', [Controllers\membersController::class, 'loggedIn']);

});













