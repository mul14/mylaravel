<?php

Route::get('/', array('as' => 'home', 'uses' => 'PagesController@home'));

Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'));
Route::get('logout', array('as' => 'logout', 'uses' => 'UsersController@logout'));

Route::resource('users', 'UserController');

Route::group(array('prefix' => 'admin'), function(){

});
