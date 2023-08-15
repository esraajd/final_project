<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerRequestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerRequestAdminController;

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
/** Routs for admin app */
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/index', [CustomerRequestAdminController::class, 'index'])->name('home.index');
Route::get('/showadmin/{id}', [CustomerRequestAdminController::class, 'showadmin'])->name('home.showadmin');
Route::get('/editadmin/{id}', [CustomerRequestAdminController::class, 'editadmin'])->name('home.editadmin');
Route::put('/editadmin/{id}', [CustomerRequestAdminController::class, 'updateadmin'])->name('home.updateadmin');









/** Routs for user app */

Route::get('/create', [CustomerRequestController::class, 'create'])->name('create');
Route::post('/store', [CustomerRequestController::class, 'store'])->name('store');
Route::get('/show/{id}', [CustomerRequestController::class, 'show'])->name('show');
Route::get('/edit/{id}', [CustomerRequestController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [CustomerRequestController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [CustomerRequestController::class, 'destroy'])->name('destroy');

Route::get('/',[CustomerRequestController::class,'index']);
Route::get('/all', [CustomerRequestController::class, 'all'])->name('all');
Route::get('/requests',[CustomerRequestController::class,'requests']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');



