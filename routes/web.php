
<?php

use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', function () {
    return view('home');
})->name('home');

// COLLECTIONS
Route::get('/collections', function () {
    return view('collections.index');
})->name('collections.index');

// VIRTUAL MUSEUM
Route::get('/virtual-museum', function () {
    return view('virtual-museum.index');
})->name('museum.index');

// ARTICLES
Route::get('/articles', function () {
    return view('articles.index');
})->name('articles.index');

// TIMELINE
Route::get('/timeline', function () {
    return view('timeline.index');
})->name('timeline.index');

// ABOUT
Route::get('/about', function () {
    return view('about.index');
})->name('about');

//articles show

Route::get('/articles', function () {
    return view('articles.index');
})->name('articles.index');
