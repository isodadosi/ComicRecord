<?php


use Illuminate\Http\Request;
use App\Comic;

Route::get('/','ComicsController@index')->name('index');

Route::get('/create','ComicsController@create')->name('create');
Route::post('/store','ComicsController@store')->name('store');
