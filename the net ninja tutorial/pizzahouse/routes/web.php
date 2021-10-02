<?php

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


// query parameters
Route::get('/pizzas', function () {
	$pizzas = [
		['type' => 'hawaiian', 'base' => 'cheesy crust'],
    ['type' => 'volcano', 'base' => 'garlic crust'],
    ['type' => 'veg supreme', 'base' => 'thin & crispy']
	];

	$name = request('name');

	return view('pizzas', [
		'pizzas' => $pizzas,
		'name' => $name,
		'age' => request('age')
	]);
});


// route parameters / wildcards
Route::get('/pizzas/{id}', function ($id) {
	// use the $id variable to query the db for a record

	return view('details', ['id' => $id]);
});