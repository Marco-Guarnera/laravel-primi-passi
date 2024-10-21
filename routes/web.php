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
    // Variabile
    $text = 'Laravel: Hello World!';
    // Struttura dati
    $list = ['Item 01', 'Item 02', 'Item 03'];

    return view('home', compact('text', 'list'));
});
