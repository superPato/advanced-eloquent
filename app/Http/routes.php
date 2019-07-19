<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$books = DB::table('categories')
		->join('books', 'categories.id', '=', 'books.category_id')
		->where('books.status', 'public')
		->select('categories.name as category', 'books.title', 'books.description')
		->get();

	return view('querybuilder.index', compact('books'));
});
