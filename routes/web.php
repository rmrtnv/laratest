<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::get('/upload', function () {
    return view('upload');
})->name('upload');

Route::post('/upload', function(DataController $data){
    return $data->store();
});

Route::get('/view', function (DataController $data) {
    return $data->view();
})->name('view');

Route::post('/truncate', function(DataController $data){
    return $data->truncate();
})->name('truncate');