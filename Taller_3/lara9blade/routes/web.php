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
    return view('vista1');
});

Route::get('/formulario', function () {
    return view('vista2');
});

Route::get('/acordeon', function () {
    return view('acordeon');
});

Auth::routes();


Route::get('/tablas', function (){
    $array1 = ['050500__.pdf' , 'Fecha' => 'February 28 2018 17:46:21', 'Tamanio' => '0.28 MB'];
    $array2 = ['050513__Rev02.pdf' , 'Fecha' => 'February 28 2018 17:46:51', 'Tamanio' => '0.28 MB'];
    $array3 = ['050800__pdf.Rev0.pdf' , 'Fecha' => 'February 28 2018 17:47:21', 'Tamanio' => '0.28 MB'];
    $array4 = ['051200__.pdf' , 'Fecha' => 'February 28 2018 17:48:21', 'Tamanio' => '0.28 MB'];

    $filas = [$array1];
    $filas = [$array2];
    $filas = [$array3];
    $filas = [$array4];

    $filas = json_decode(json_encode($filas));

    return view('tabla') -> with([
        'filas' => $filas
    ]);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
