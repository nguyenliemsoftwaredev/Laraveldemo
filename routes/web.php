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
use App\TheLoai;
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' =>'admin'], function(){
	Route::group(['prefix' =>'theloai'], function(){	
		//admin/theloai/danhsach
		Route::get('danhsach','TheLoaiController@getDanhSach');

		Route::get('sua/{id}','TheLoaiController@getSua');

		Route::post('sua/{id}','TheLoaiController@postSua');

		Route::get('them','TheLoaiController@getThem');

		Route::post('them','TheLoaiController@postThem');

		Route::get('xoa/{id}','TheLoaiController@getXoa');

	});

	Route::group(['prefix' =>'loaitin'], function(){	
		//admin/loai/them
		Route::get('danhsach','LoaiTinController@getDanhSach');

		Route::get('sua/{id}','LoaiTinController@getSua');

		Route::post('sua/{id}','LoaiTinController@postSua');

		Route::get('them','LoaiTinController@getThem');

		Route::post('them','LoaiTinController@postThem');

		Route::get('xoa/{id}','LoaiTinController@getXoa');

	});

	Route::group(['prefix' =>'tintuc'], function(){	
		//admin/theloai/them
		Route::get('danhsach','TinTuciController@getDanhSach');

		Route::get('sua','TinTucController@getSua');

		Route::get('them','TinTucController@getThem');

	});



});
