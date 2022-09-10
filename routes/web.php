<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'WelcomeController@welcome')->name('welcome');
    Route::get('/product_details/{id}', 'ProductController@productDetails')->name('product_details');


Auth::routes(['verify' => true]);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

});

Route::prefix('admin')->group(function (){
    Route::get('/category', 'CategoriesController@category')->name('category');
    Route::post('/add_category', 'CategoriesController@addCategory')->name('add_category');
    Route::get('/view_all_category', 'CategoriesController@viewAllCategory')->name('view_all_category');
    Route::get('/edit_category/{id}', 'CategoriesController@editCategory')->name('edit_category');
    Route::post('/update_category/{id}', 'CategoriesController@updateCategory')->name('update_category');
    Route::get('/delete_category/{id}', 'CategoriesController@deleteCategory')->name('delete_category');
    Route::get('/add_product', 'ProductController@addProduct')->name('add_product');
    Route::post('/store_product', 'ProductController@storeProduct')->name('store_product');
    Route::get('/view_all_product','ProductController@allProduct')->name('view_all_product');
    Route::get('/edit_product/{id}','ProductController@editProduct')->name('edit_product');
    Route::post('/update_product/{id}', 'ProductController@updateProduct')->name('update_product');
    Route::get('/delete_product/{id}', 'ProductController@deleteproduct')->name('delete_product');



});
