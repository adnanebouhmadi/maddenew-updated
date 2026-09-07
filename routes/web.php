<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/collection', function () {
    return view('collection');
})->name('collection');