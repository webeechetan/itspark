<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/login',function(){
    return view('login');
})->middleware('guest')->name('login');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix'=>'/user'],function(){
        Route::get('/create', function () {
            return view('users.add');
        })->name('user.create');

        Route::get('/list', function () {
            return view('users.list');
        })->name('user.list');
    });
    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

// Route::
