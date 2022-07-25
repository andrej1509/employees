<?php

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/contacts/all/{id}', 'ContactController@showOneMessage')->name('contact-data-one');
Route::get('/contacts/all', 'ContactController@allData')->name('contact-data');
Route::post('/submit', 'ContactController@submit')->name('contact-form');
