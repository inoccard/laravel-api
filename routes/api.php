<?php

use Illuminate\Http\Request;

// API do site
$this->group(['prefix' => 'V1'], function(){

	$this->post('auth', 'Auth\AuthApiController@authenticate');
	$this->post('auth-refresh','Auth\AuthApiController@refreshToken');

	$this->group(['middleware' => 'jwt.auth'], function(){
		$this->get('products/search','Api\V1\ProductController@search');
		$this->resource('products','Api\V1\ProductController', ['except' => ['create', 'edit']]);
	});
});
