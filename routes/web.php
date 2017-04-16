<?php



Route::get('/', function () {

    return view('acceuil');
});

Route::get('/vente', function () {

    return view('pages.vente');
});

Route::get('/location', function () {

    return view('pages.location');
});

Route::get('/contact', function () {

    return view('pages.contact');
});