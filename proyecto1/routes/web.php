<?php

Route::get('/', 'HomeController@getHome');

//Route::get('login', function() {
//	return view('auth.login');
//});

//Route::get('logout', function() {
//	return 'Logout Usuario';
//});

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('catalog', 'CatalogController@getIndex');

	Route::get('catalog/show/{id}', 'CatalogController@getShow');

	Route::get('catalog/create', 'CatalogController@getCreate');

	Route::get('catalog/edit/{id}', 'CatalogController@getEdit');

	Route::post('catalog/create', 'CatalogController@postCreate');

	Route::put('/catalog/edit/{id}', 'CatalogController@putEdit');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>

