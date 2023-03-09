<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ArticleController;

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
    return view('welcome');
});

Route::get('/p1', function () {
    return view('pag1');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/test', [TestController::class, 'test']);
Route::get('/newMethod', [TestController::class, 'newMethod']);

Route::get('/flavor', [ArticleController::class, 'flavor']);
Route::get('/flavor', [ArticleController::class, 'articles']);

Route::get('/flavor/{id}', [ArticleController::class, 'show']) -> name('articleshow');

// Route::get('test/{id}', function ($id) {
//     return 'test '.$id;
// });


