<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\testNewController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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

// Route::resource('blog', BlogController::class);


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout',[SessionController::class, 'destroy']);
Route::get('/dashboard', function(){
    return view('user.dashboard');
});