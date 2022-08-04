<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtsController;
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
    return view('layout');
});

Route::get('login', function(){
    return view('login');
})->name('login');

Route::get('register', function(){
    return view('register');
});

Route::get('addarts', function(){
    return view('addarts');
});

Route::get('logout', function(){
    Session::forget('user');
    return redirect('/');
});
Route::post('login', [UserController::class, 'login']
 );
Route::post('register', [UserController::class, 'register']
);

Route::post('addarts', [ArtsController::class, 'addarts']
);

Route::get('/arts', [ArtsController::class, 'index']);
Route::get('/arts', [ArtsController::class, 'index']);
Route::get('search', [ArtsController::class, 'search']);
Route::post('add_product', [ArtsController::class, 'add']);
Route::get('cartlist', [ArtsController::class, 'cartlist']);
Route::get('ordernow', [ArtsController::class, 'ordernow']);
Route::post('orderplace', [ArtsController::class, 'orderplace']);
Route::get('removecart/{id}', [ArtsController::class, 'remove']);
Route::get('removeart/{id}', [ArtsController::class, 'removeart']);
Route::get('details/{id}', [ArtsController::class, 'detail']);