<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use app\admin;
use Illuminate\Http\Request;

//admin
	Route::group(['prefix'=>'Admin'], function () {
		Route::get('/quanlybaiviet','Controller_Admin@quanlybaiviet');
		Route::get('/quanlydanhmuc','Controller_Admin@quanlydanhmuc');
		Route::get('/quanlykhachhang','Controller_Admin@quanlykhachhang');
		Route::get('/thongke','Controller_Admin@thongke');
		Route::get('/trangchinh','Controller_Admin@trangchinh');
		Route::get('/dangnhap[','Controller_Admin@dangnhapadmin');
		Route::post('/dangnhap','Controller_Admin@xulydangnhap');
	});


//user
	 Route::group(['prefix'=>'Home'],function(){
	 	Route::get('/banggiadichvu','Controller_Home@banggiadichvu');
	 	Route::get('/chothuematbang','Controller_Home@chothuematbang');
	 	Route::get('/chothuenhanguyencan','Controller_Home@chothuenhanguyencan');
	 	Route::get('/chothuephongtro','Controller_Home@chothuephongtro');
	 	Route::get('/dangky','Controller_Home@dangky');
	 	Route::get('/dangnhap','Controller_Home@dangnhap');
	 	Route::get('/dangtin','Controller_Home@dangtin');
	 	Route::get('/huongdan','Controller_Home@huongdan');
	 	Route::get('/thanhtoan','Controller_Home@thanhtoan');
	 	Route::get('/timnguoioghep','Controller_Home@timnguoioghep');
	 	Route::get('/trangchu','Controller_Home@btrangchu');
	 });