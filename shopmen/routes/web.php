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

Route::get('/', function () {
    return view('layouts.admin.main');
});
Route::get('login','Auth\LoginController@getLogin')->name('login');
Route::post('login','Auth\LoginController@postLogin');
Route::get('logout','Auth\LoginController@logout')->name('logout');
Route::get('register','Auth\RegisterController@getRegister')->name('register');
Route::post('register','Auth\RegisterController@register');
Route::get('check',function(){
	echo "string";
})->name('check');
Route::get('verify/{id}','Auth\RegisterController@verify')->name('verify');
Route::post('verify/{id}','Auth\RegisterController@postverify');
Route::get('success/{id}','Auth\RegisterController@success')->name('success');
Route::get('find-password','Auth\ResetPasswordController@findpass')->name('findpass');
Route::post('find-password','Auth\ResetPasswordController@postfindpass');
Route::get('rest-password/{id}','Auth\ResetPasswordController@rest')->name('rest.pass');
Route::post('rest-password/{id}','Auth\ResetPasswordController@postRest');
Route::get('password-success/{id}','Auth\ResetPasswordController@PassSuccess')->name('pass.success');
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'cate'],function(){
		Route::get('list','Admin\CategoryController@list')->name('list.cate');
		Route::get('add','Admin\CategoryController@add')->name('add.cate');
		Route::get('up/{id}','Admin\CategoryController@getup')->name('up.cate');
		Route::get('delete/{class}','Admin\CategoryController@delete')->name('delete.cate');
		Route::post('add-and-up','Admin\CategoryController@save')->name('save.cate');
	});
	Route::group(['prefix'=>'news'],function(){
		Route::get('list','Admin\PostController@list')->name('list.news');
		Route::get('add','Admin\PostController@add')->name('add.news');
		Route::get('up/{id}','Admin\PostController@getup')->name('up.news');
		Route::get('delete/{class}','Admin\PostController@delete')->name('delete.news');
		Route::post('add-and-up','Admin\PostController@save')->name('save.news');
	});
});