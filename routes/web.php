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

//json data multiple dependency
Route::get('get-sub-category/{id}','Backend\PostController@GetSubcat');
Route::get('get-district/{id}','Backend\PostController@Getdistrict');

//Posts--------
Route::get('/post_create','backend\PostController@create')->name('post_create');
Route::post('/post_store','backend\PostController@store')->name('post_store');
Route::get('/post_index','backend\PostController@index')->name('post_index');
Route::get('/post_delete/{id}','backend\PostController@delete')->name('post_delete');
Route::get('/post_edit/{id}','backend\PostController@edit')->name('post_edit');
Route::post('/post_update/{id}','backend\PostController@update')->name('post_update');

//settings=========

//Social settings--------
Route::get('/social_setting','backend\settingController@social_setting')->name('social_setting');
Route::post('/social_update/{id}','backend\settingController@social_update')->name('social_update');

//SEO settings--------
Route::get('/seo_setting','backend\settingController@seo_setting')->name('seo_setting');
Route::post('/seo_update/{id}','backend\settingController@seo_update')->name('seo_update');

//Namaz settings--------
Route::get('/namaz_setting','backend\settingController@namaz_setting')->name('namaz_setting');
Route::post('/namaz_update/{id}','backend\settingController@namaz_update')->name('namaz_update');

//LiveTV settings--------
Route::get('/livetv_setting','backend\settingController@livetv_setting')->name('livetv_setting');
Route::post('/livetv_update/{id}','backend\settingController@livetv_update')->name('livetv_update');
Route::get('/active_livetv/{id}','backend\settingController@active_livetv')->name('active_livetv');
Route::get('/deactive_livetv/{id}','backend\settingController@deactive_livetv')->name('deactive_livetv');

//Notice settings--------
Route::get('/notice_setting','backend\settingController@notice_setting')->name('notice_setting');
Route::post('/notice_update/{id}','backend\settingController@notice_update')->name('notice_update');
Route::get('/active_notice/{id}','backend\settingController@active_notice')->name('active_notice');
Route::get('/deactive_notice/{id}','backend\settingController@deactive_notice')->name('deactive_notice');

//Photo Gallery--------
Route::get('/photo_index','backend\GalleryController@photo_index')->name('photo_index');
Route::post('/photo_store','backend\GalleryController@photo_store')->name('photo_store');
Route::get('/photo_delete/{id}','backend\GalleryController@photo_delete')->name('photo_delete');
Route::get('/photo_edit/{id}','backend\GalleryController@photo_edit')->name('photo_edit');
Route::post('/photo_update/{id}','backend\GalleryController@photo_update')->name('photo_update');

//Photo Gallery--------
Route::get('/video_index','backend\GalleryController@video_index')->name('video_index');
Route::post('/video_store','backend\GalleryController@video_store')->name('video_store');
Route::get('/video_delete/{id}','backend\GalleryController@video_delete')->name('video_delete');
Route::get('/video_edit/{id}','backend\GalleryController@video_edit')->name('video_edit');
Route::post('/video_update/{id}','backend\GalleryController@video_update')->name('video_update');

//Important Website settings--------
Route::get('/important_website','backend\settingController@important_website')->name('important_website');
Route::post('/important_website_store','backend\settingController@important_website_store')->name('important_website_store');
Route::get('/important_website_delete/{id}','backend\settingController@delete')->name('important_website_delete');
Route::get('/important_website_edit/{id}','backend\settingController@edit')->name('important_website_edit');
Route::post('/important_website_update/{id}','backend\settingController@update')->name('important_website_update');