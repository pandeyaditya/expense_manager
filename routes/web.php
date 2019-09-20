<?php

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

/* Expenses Routes */
Route::get('/', function () {
    $categories = \App\Category::all();
    return view('addexpense')->with('categories',$categories);
});

Route::get('/addexpense', function () {
    $categories = \App\Category::all();
    return view('addexpense')->with('categories',$categories);
});

Route::post('/expense/add','ExpenseController@add');

Route::get('/allexpenses', function () {
    $expenses = \App\Expense::all();
    return view('allexpenses')->with('expenses',$expenses);
});



/* Categories Routes */

Route::get('/addcategory', function () {
    return view('addcategory');
});

Route::post('/category/add','CategoryController@add');

Route::get('/allcategories', 'CategoryController@allcategories');

