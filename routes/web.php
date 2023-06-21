<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthController;

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
    return view('login');
});
Route::get('beranda', function(){
    return view('beranda');
})->middleware('auth:member');
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth:web');

Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/',[AuthController::class,'auth']);
Route::get('register',[MemberController::class,'register']);
Route::post('register',[MemberController::class,'create']);
Route::get('logout',[AuthController::class,'logout']);

Route::get('login/admin',[AuthController::class,'login_admin']);
Route::post('login/admin',[AuthController::class,'auth']);
Route::get('register/admin',[UserController::class,'register']);
Route::post('register/admin',[UserController::class,'create']);
Route::get('logout/admin',[AuthController::class,'logout_admin']);

Route::get('beranda',[PakaianController::class,'show']);
Route::get('product/detail/{id}',[PakaianController::class,'detail']);

Route::get('product',[ProductController::class,'show']);
Route::get('product/add',[ProductController::class,'add']);
Route::post('product/create',[ProductController::class,'create']);
Route::get('product/delete/{id}',[ProductController::class,'delete']);
Route::get('product/edit/{id}',[ProductController::class,'edit']);
Route::post('product/update/{id}',[ProductController::class,'update']);
