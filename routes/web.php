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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/notification/notification-email','NotificationController@email')->name('notification.form.email');
Route::post('/notification/notification-email/send-email','NotificationController@sendEmail')->name('notification.send.email');
Route::get('/notification/notification-sms','NotificationController@sms')->name('notification.form.sms');
Route::post('/notification/notification-sms/send-sms','NotificationController@sendSms')->name('notification.send.sms');


