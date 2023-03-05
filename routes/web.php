<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return view('welcome');
});

Route::get('/index', [ContactController::class, 'index']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/portfolio', [ContactController::class, 'portfolio']);

Route::post('store', [ContactController::class, 'store']);

Route::get('/content/index', [ContactController::class, 'content_index']);

Route::get('/edit/{content}', [ContactController::class, 'edit'])->name('edit');

Route::patch('/update/{content}', [ContactController::class, 'update'])->name('update');

Route::get('/delete/{content}', [ContactController::class, 'destroy'])->name('destroy');