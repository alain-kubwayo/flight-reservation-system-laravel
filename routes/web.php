<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/flights', 'FlightController@index')->middleware('auth')->name('flights.index');

Route::get('/flights/create', 'FlightController@create')->name('flights.create');

Route::get('/flights/{id}', 'FlightController@show')->middleware('auth')->name('flights.show');

Route::post('/flights', 'FlightController@store')->name('flights.store');

Route::delete('/flights/{id}', 'FlightController@destroy')->middleware('auth');

Auth::routes(
    [
        'register'=>false
    ]
);

Route::get('/home', 'HomeController@index')->name('home');
