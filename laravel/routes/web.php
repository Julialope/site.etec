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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/instituicao', function () {
    return view('instituicao');
});
Route::get('/cursos', function () {
    return view('cursos');
});
Route::get('/departamento', function () {
    return view('departamento');
});
Route::get('/oportunidades', function () {
    return view('oportunidades');
});
Route::get('/vestibulinho', function () {
    return view('vestibulinho');
});
