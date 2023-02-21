<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MtomController;
use App\Http\Controllers\BulkInsertController;
use App\Http\Controllers\QbController;
use App\Http\Controllers\FileUpController;
use App\Http\Controllers\ProductController;

use App\Models\Product;

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
Route::get('/ter', function(){
        $fre = Product::select('name', 'detail')->where('name', 'like', '%'.'F'.'%' )->get()->toArray();
        echo "<pre>";
        print_r($fre);
});
Route::get('/terw/{o?}',function($o){
    $users1 = Array(
        [
            'name'=>'john',
            'email'=>'john@gmail.com'
        ],

        [
            'name' => 'tarun',
            'email' => 'tarun@gmail.com'
        ],

        [
            'name' => 'umesh',
            'email' => 'umesh@gmail.com'
        ],

        [
            'name' => 'rakesh',
            'email' => 'rakesh @gmail.com'
        ],

        [
            'name' => 'rafiq',
            'email' => 'rafiq@gmail.com'
        ],

        [
            'name' => 'jonita',
            'email' => 'jonita@gmail.com'
        ],

        [
            'name' => 'faizan',
            'email' => 'faizan@gmail.com'
        ]
    );

    $lon = array_column($users1, 'name');
    $arr1 = array();
    foreach($users1 as $k=>$lons){
        $findme = $o;
        $pos = strpos($lons['name'], $findme);
        if ($pos === 0) {
            array_push($arr1, $lons);
        }else {
            continue;
        }
    }
    echo "<pre>";
    print_r($arr1);
});
