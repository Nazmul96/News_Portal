<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin_logout', 'HomeController@logout')->name('admin_logout');

Route::get('check',function(){
 echo "check done";
})->name('check')->middleware('verified');


//category--------
Route::get('/categories','backend\CategoryController@index')->name('category_index');
Route::post('/category_store','backend\CategoryController@store')->name('category_store');
Route::get('/category_delete/{id}','backend\CategoryController@delete')->name('category_delete');
Route::get('/category_edit/{id}','backend\CategoryController@edit')->name('category_edit');
Route::post('/category_update/{id}','backend\CategoryController@update')->name('category_update');

//Subcategory--------
Route::get('/subcategory','backend\SubcategoryController@index')->name('subcategory_index');
Route::post('/subcategory_store','backend\SubcategoryController@store')->name('subcategory_store');
Route::get('/subcategory_delete/{id}','backend\SubcategoryController@delete')->name('subcategory_delete');
Route::get('/subcategory_edit/{id}','backend\SubcategoryController@edit')->name('subcategory_edit');
Route::post('/subcategory_update/{id}','backend\SubcategoryController@update')->name('subcategory_update');


//Division--------
Route::get('/division','backend\DivisionController@index')->name('division_index');
Route::post('/division_store','backend\DivisionController@store')->name('division_store');
Route::get('/division_delete/{id}','backend\DivisionController@delete')->name('division_delete');
Route::get('/division_edit/{id}','backend\DivisionController@edit')->name('division_edit');
Route::post('/division_update/{id}','backend\DivisionController@update')->name('division_update');

//districts--------
Route::get('/district','backend\DistrictController@index')->name('district_index');
Route::post('/district_store','backend\DistrictController@store')->name('district_store');
Route::get('/district_delete/{id}','backend\DistrictController@delete')->name('district_delete');
Route::get('/district_edit/{id}','backend\DistrictController@edit')->name('district_edit');
Route::post('/district_update/{id}','backend\DistrictController@update')->name('district_update');