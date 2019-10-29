<?php

use Illuminate\Http\Request;
Route::get('/',function(){
	return view('admin.dashboarh');
});
Route::group(['prefix'=>'cate'],function(){
	Route::get('list','Admin\CategoryController@list')->name('list.cate');
	Route::get('add','Admin\CategoryController@add')->name('add.cate');
	Route::get('up/{id}','Admin\CategoryController@getup')->name('up.cate');
	Route::get('delete/{class}','Admin\CategoryController@delete')->name('delete.cate');
	Route::post('add-and-up','Admin\CategoryController@save')->name('save.cate');
});