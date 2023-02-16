<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MtomController;
use App\Http\Controllers\BulkInsertController;
use App\Http\Controllers\QbController;
use App\Http\Controllers\FileUpController;
use App\Http\Controllers\ProductController;

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

Route::get('/members', [IndexController::class, 'index']);
Route::get('/latest', [IndexController::class, 'lastest']);
Route::get('/odl', [IndexController::class, 'oldest']);
Route::get('/mm', [MtomController::class, 'index']);
Route::get('/bulk', [BulkInsertController::class, 'bulkstore']);


/*--------------------------QUERY BUILDER------------------------- */

Route::get('/qb', [QbController::class, 'index']);
Route::get('/qb2', [QbController::class, 'test']);
// Route::get('/fileup', [FileUpController::class, 'index']);
// Route::post('/fileok2', [FileUpController::class, 'store']);
// Route::prefix('image')->group(function(){
//     Route::get('job/{filename}', [FileUpController::class, 'showJobImage'])->name('jobImage');
// });



/*--------------------CRUD LARAVEL------------------------------- */

Route::resource('products', ProductController::class);
