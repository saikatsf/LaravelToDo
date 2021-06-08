<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

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

Route::view('/','UserDash')->middleware('accesspermission');
Route::view('Ulogin','UserLogin')->middleware('alreadylogged');
Route::view('Uregister','UserRegister')->middleware('alreadylogged');

Route::post('registerUser',[UserController::class,'registerfunc']);
Route::post('loginUser',[UserController::class,'loginfunc']);
Route::get('getTable/{Uid}',[UserController::class,'getTable']);



 Route::get('/UlogOut',function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('Ulogin');
 });