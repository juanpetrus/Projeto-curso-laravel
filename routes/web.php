<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/curso', [WebController::class, 'curso'])->name('course');
Route::get('/blog', [WebController::class, 'blog'])->name('blog');
Route::get('/blog/{uri}', [WebController::class, 'artigo'])->name('article');
Route::get('/contato', [WebController::class, 'contato'])->name('contact');
