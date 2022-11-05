<?php

use App\Http\Controllers\hudaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\userController;

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

Route::resource('user', UserController::class);

Route::resource('hudai', HudaiController::class);

// Route::get('/check', function () {
//     return view('checkValue',['raihan'=>'rony']);
// });