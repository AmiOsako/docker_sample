<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Requests\ContactRequest;

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
    return view('welcome');
});

Route::get('/contact', 'App\Http\Controllers\ContactsController@index')->name('contact.index');
Route::post('/contact/confirm', 'App\Http\Controllers\ContactsController@confirm')->name('contact.confirm');
Route::post('/contact/complete', 'App\Http\Controllers\ContactsController@complete')->name('contact.complete');
