<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/user/edit', 'UserController@edit')->name('user.edit');

Route::prefix('')->group(function (){
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('user')->group(function (){
        Route::get('edit', 'UserController@edit')->name('user.edit');
        Route::put('edit', 'UserController@update')->name('user.update');
    });
});

Route::prefix('admin')->group(function (){
    Route::get('','Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('','Admin\LoginController@login');
    Route::post('logout','Admin\LoginController@logout');
    Route::get('register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register','Admin\RegisterController@register');
    Route::post('password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset','Admin\ResetPasswordController@reset');
    Route::get('password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('dashboard','AdminController@index')->name('admin.dashboard');
    Route::get('edit-info','AdminController@edit')->name('admin.info.edit');
    Route::put('edit-info','AdminController@update')->name('admin.info.update');

    Route::prefix('slider')->group(function (){
        Route::get('','SliderController@index');
        Route::post('','SliderController@store')->name('admin.slider.store');
        Route::get('edit/{id}','SliderController@edit')->name('admin.slider.edit');
        Route::put('edit/{id}','SliderController@update')->name('admin.slider.update');
        Route::delete('destroy/{id}','SliderController@destroy')->name('admin.slider.destroy');
    });
});
