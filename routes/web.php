<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Docs_RentedController;
use App\Http\Controllers\DoctypeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RatingController;

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

Route::get('/author/dashboard', function () {
    return view('/author/dashboard');
})->name('author.dashboard');

Route::get('/reader/dashboard', function () {
    return view('/reader/dashboard');
})->name('reader.dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resources([
    'docs_rented' => Docs_RentedController::class,
    'doctypes' => DoctypeController::class,
    'documents' => DocumentController::class,
    'genres' => GenreController::class,
    'ratings' => RatingController::class,
]);
