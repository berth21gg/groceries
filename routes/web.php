<?php

use App\Http\Controllers\GroceriesController;
use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get('hola', function () {
    return 'Hello World';
});

Route::get('/', [siteController::class, 'index']);
Route::get('/services', [siteController::class, 'services']);
Route::get('/products', [siteController::class, 'products']);
Route::get('/contact', [siteController::class, 'contact']);
*/


Route::get('/', [GroceriesController::class, 'index'])->name("home");
Route::get('/shop', [GroceriesController::class, 'shop'])->name("shop");
Route::get('/register', [GroceriesController::class, 'register'])->name("register");
Route::get('/login', [GroceriesController::class, 'login'])->name("login");


