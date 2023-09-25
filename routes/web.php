<?php
use App\Http\Livewire\Login;
use App\Http\Livewire\Signup;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\controller;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Logout;

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
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index')
    ->middleware('auth');
Route::resource('products', ProductController::class);
Route::get('/login', Login::class)->name('login');
Route::post('/login', [Login::class, 'authenticate']);

Route::post('/signup', [App\Http\Controllers\UserController::class, 'signup'])->name('signup');

Route::get('/logout', Logout::class)->name('logout');

Route::get('/signup', function () {
    return view('livewire.signup')
;})->name('signupp');

Route::get('/', function () {
    return view('livewire.login');
})->name('loginn');
    

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

  
