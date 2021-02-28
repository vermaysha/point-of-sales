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

Route::name('auth.')->group(function() {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::get('/forgot', function () {
        return view('auth.forgot');
    })->name('forgot');

    Route::get('/recover', function () {
        return view('auth.recover');
    })->name('recover');

    Route::get('/logout', function () {
        return redirect()->route('auth.login')->with('success', 'You have logged out');
    })->name('logout');
});


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('/dashboard')->group(function() {
    Route::prefix('/settings')->name('settings.')->group(function() {
        Route::get('/', function() {
            return view('dashboard.settings.application');
        })->name('app');

        Route::get('/notification', function() {
            return view('dashboard.settings.notification');
        })->name('notification');

        Route::get('/email', function() {
            return view('dashboard.settings.email');
        })->name('email');

        Route::get('/telegram', function() {
            return view('dashboard.settings.telegram');
        })->name('telegram');

        Route::get('/api', function() {
            return view('dashboard.settings.api');
        })->name('api');
    });

    Route::get('/users', function() {
        return view('dashboard.users');
    })->name('users');

    Route::prefix('/user')->name('user.')->group(function() {
        Route::get('/', function() {
            return view('dashboard.user.profile');
        })->name('profile');

        Route::get('/{username?}', function() {
            return view('dashboard.user.detail');
        })->name('detail')->where('name', '[A-Za-z0-9-_]+');

        Route::get('/edit/{username?}', function() {
            return view('dashboard.user.edit');
        })->name('edit')->where('name', '[A-Za-z0-9-_]+');
    });
});
