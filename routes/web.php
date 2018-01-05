<?php

/*Thaough our both controllers are in User dir, so we made group
route*/
Route::group(['namespace' => 'User'], function(){

/*This route will show main index page.*/
Route::get('/','HomeController@index'); 

/*This route will use for showing specific post*/
Route::get('post/{post}', 'PostController@post')->name('post');
}); 


/*Thaough our all controllers are in Admin dir, so we made group
route*/
Route::group(['namespace' => 'Admin'], function(){

	//After login admin panel first time this view will show
	Route::get('admin/home','HomeController@home')->name('admin.home');

	//Post route
	Route::resource('admin/post','PostController');

	//Tag route
	Route::resource('admin/category','CategoryController');

	//Category route
	Route::resource('admin/tag','TagController');

	//User route
	Route::resource('admin/user','UserController');
});