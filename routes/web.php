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

Route::get('/', function () {
    $comics = config('comics');
    return view('home',[
        'comics' => $comics,
    ]);
})->name('home');

Route::get('/home/{series}', function ($series) {
    $comics = null;
    foreach (config('comics') as $value){
        if ($value['series'] == $series){
            $comics = $value;
            break;
        }
    }

    if ($comics) {
        return view('prodotto',[
            'pageTitle' => 'Fumetti - Homepage',
            'comics'    => $comics,
        ]);
    } else {
        abort(404);
    }
})->name('home');

Route::get('/prodotto', function(){
    return view('prodotto');
})->name('prodotto');