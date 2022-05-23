<?php

use App\Http\Controllers\WinesController;
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
    return view('main');
}) -> name('home');

Route::get('/wines', [WinesController::class, 'index']) -> name('wines')->middleware('auth');
Route::post('/wines', [WinesController::class, 'store']) -> name('store.wines');
Route::post('/wines/{ID}', [WinesController::class, 'edit']) -> name('edit.wines');
Route::delete('/wines/{ID}', [WinesController::class, 'delete']) -> name('delete.wines');

require __DIR__.'/auth.php';
