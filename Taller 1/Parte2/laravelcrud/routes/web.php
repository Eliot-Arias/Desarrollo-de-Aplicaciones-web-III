<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "Bienvenido al curso de laravel";
});

Route::get('/Producto', function () {
    return "Aqui ira la vista de Productos";
});

Route::get('/Producto/{Carrito}', function () {
    return "Aqui se listara el carrito de compras";
});

Route::get('/Producto/{product}', function ($product) {
    return "El producto seleccionado es: " . $product;
});

Route::get('/Producto/{product}/{precio}', function ($product, $precio) {
    return "El producto comprado es: " . $product . " Con precio de: " . $precio;
});

//Ejercicio 1:

// Route::get('Alumno/{nombre}/{apellido}', function ($nombre, $apellido) {
//     return "El Alumno seleccionado es: " . $nombre . " " . $apellido;
// });

// // Ejercicio 2:

// Route::get('Alumno/{nombre}/{fechNac}', function($nombre, $fechNac) {
//     $date = date_create($fechNac);
//     return "La fecha de nacimiento de: " .$nombre . " es " . $date->format('d/m/y');
// });


Route::get('Alumno/{Nombre}/{dato}', function($nombre, $dato){
    if(null != ($date = date_create($dato))){
        return "La fecha de nacimiento de: " . $nombre . " es " . $date->format('d/m/y');
    }else{
        return "El Alumno seleccionado es: " . $nombre . " " . $dato;
    }
});