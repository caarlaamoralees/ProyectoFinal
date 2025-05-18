<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/iniciar-sesion', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/perfil', function () {
    return view('perfil');
});

use App\Http\Controllers\ProductoController;

Route::get('/descargar-xml', [ProductoController::class, 'descargarXML'])->name('productos.xml');


