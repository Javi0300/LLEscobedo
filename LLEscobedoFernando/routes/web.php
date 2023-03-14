<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sitioweb.index');
});

Route::get('/login', function () {
    return view('sitiogestion.login');
});

Route::get('/Inicio', function () {
    return view('sitiogestion.inicio');
});

Route::get('/tienda', function () {
    return view('sitioweb.tienda');
});

Route::get('/servicios', function () {
    return view('sitioweb.servicios');
});

Route::get('/contacto', function () {
    return view('sitioweb.contacto');
});

Route::get('/acercade', function () {
    return view('sitioweb.acercade');
});


Route::get('/cart', function () {
    return view('sitioweb.cart');
});

Route::get('/checkout', function () {
    return view('sitioweb.checkout');
});

Route::get('/gracias', function () {
    return view('sitioweb.gracias');
});