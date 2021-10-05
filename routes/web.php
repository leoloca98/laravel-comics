<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// #HOME
Route::get('/', function () {
    $mangas = config('comics');
    return view('home', ['comics' => $mangas]);
})->name('home');


// #SINGLE COMIC DETAILS
Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('details', compact('comic'));
    } else abort('404');
})->name('details');
