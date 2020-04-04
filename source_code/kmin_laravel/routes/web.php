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


 // Admin
Route::group(['prefix'=>'/Admin'],function(){
	Route::get('/Kiemduyet','ControllerName@kiemduyet');
	Route::get('/login','ControllerName@login');
	Route::get('/logout','ControllerName@logout');
	Route::get('/Thongtin_member','ControllerName@thongtin');
});


Route::get('/User/index', 'handleController@getForm');
Route::post('/User/profile', 'handleController@getForm2');







// Browser
Route::group(['prefix'=>'/Browser'],function(){
		Route::get('/Doisong','ControllerName@doisong');
		Route::get('/Dulich','ControllerName@dulic');
		Route::get('/Giaitri','ControllerName@giaitri');
		Route::get('/Giaoduc','ControllerName@giaoduc');
		Route::get('/Gocnhin','ControllerName@gocnhin');
		Route::get('/Khoahoc','ControllerName@khoahoc');
		Route::get('/Kinhdoanh','ControllerName@kinhdoanh');
		Route::get('/Phapluat','ControllerName@phapluat');
		Route::get('/Sohoa','ControllerName@sohoa');
		Route::get('/Suckhoe','ControllerName@suckhoe');
		Route::get('/Tamsu','ControllerName@tamsu');
		Route::get('/Thegioi','ControllerName@thegioi');
		Route::get('/Thethao','ControllerName@thethao');
		Route::get('//Thoisu','ControllerName@thoisu');
		Route::get('/Xe&doisong','ControllerName@xe');
		Route::get('/Ykien','ControllerName@ykien');
		
});

// Member
Route::group(['prefix'=>'/Member'],function(){
	
	Route::get('/Dangbai','ControllerName@Dangbai');
	Route::get('/Login','ControllerName@login');
	Route::get('/Logout','ControllerName@logout');
	Route::get('/Update_bai','ControllerName@Update_bai');
});



// User
Route::group(['prefix'=>'/User'],function(){
   Route::get('/binhluan', 'ControllerName@binhluan' );
});

