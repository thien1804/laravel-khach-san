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
        Route::get('','SliderController@index')->name('admin.slider');
        Route::post('','SliderController@store')->name('admin.slider.store');
        Route::get('edit/{id}','SliderController@edit')->name('admin.slider.edit');
        Route::put('edit/{id}','SliderController@update')->name('admin.slider.update');
        Route::delete('destroy/{id}','SliderController@destroy')->name('admin.slider.destroy');
    });

    Route::prefix('food-type')->group(function (){
        Route::get('','FoodTypeController@index')->name('admin.food-type');
        Route::post('','FoodTypeController@store')->name('admin.food-type.store');
        Route::get('edit/{id}','FoodTypeController@edit')->name('admin.food-type.edit');
        Route::put('edit/{id}','FoodTypeController@update')->name('admin.food-type.update');
        Route::delete('destroy/{id}','FoodTypeController@destroy')->name('admin.food-type.destroy');
    });

    Route::prefix('food')->group(function (){
        Route::get('','FoodController@index')->name('admin.food');
        Route::post('','FoodController@store')->name('admin.food.store');
        Route::get('edit/{id}','FoodController@edit')->name('admin.food.edit');
        Route::put('edit/{id}','FoodController@update')->name('admin.food.update');
        Route::delete('destroy/{id}','FoodController@destroy')->name('admin.food.destroy');
    });
});
