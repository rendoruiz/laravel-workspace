<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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


// query parameters
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');

// add before the wildcard
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');

// route parameters / wildcards
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show');

Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store')->middleware('auth');

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

// add array inside routes to disable auth routes
Auth::routes([
	'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
