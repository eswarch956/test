<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\testNewController;
use App\Http\Controllers\BlogController;

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

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/contact-us', [PageController::class, 'contact']);

// Route::get('/values', [PageController::class, 'values']);

// Route::get('/operations/{operationtype}/{operand1}/{operand2}',[PageController::class, 'operations']);

///(define the path, function or action need to be taken on requesting the path)

// Route::get('/document', function () {
//     return  response()->view('documentation');
// });
// Route::get('/news', function () {
//     return view('laravelNews');
// });
// Route::get('/laracasts', function () {
//     return view('laracasts');
// });
// Route::get('/ecosystem', function () {
//     return view('ecosyste');
// });

// Route::resource('event', testNewController::class);

Route::resource('blog', BlogController::class);


