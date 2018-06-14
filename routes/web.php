<?php
Route::get ( '/', function () {
	return view ( 'welcome' );
} );
Route::post ( '/vueitems', 'MainController@storeItem' );
Route::get ( '/vueitems', 'MainController@readItems' );
Route::post ( '/vueitems/{id}', 'MainController@deleteItem' );
Route::post ( '/edititems/{id}', 'MainController@editItem' );