<?php

Route::group(['namespace'=>'admin','middleware'=>'auth'],function(){
Route::get('admin/dashboard','DashboardController@index')->name('dashboard');	
Route::resource('admin/post','PostController');
Route::resource('admin/category','CategoryController');
Route::get('admin/setting','SettingController@index')->name('setting');
Route::get('admin/filemanager','FileManagerController@index')->name('filemanager');
Route::resource('admin/homepage','HomeController');

Route::get('admin/api/getallcategories','APIController@getAllCategories');

});

Route::group(['namespace'=>'user'],function(){
Route::get('/','HomeController@index')->name('home');
Route::get('/blog/{id}','HomeController@blog')->name('blog');
Route::get('/post/{id}','HomeController@post')->name('post');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
