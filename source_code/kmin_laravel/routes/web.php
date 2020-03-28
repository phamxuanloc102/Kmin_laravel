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
Route::get('/Admin/Kiemduyet',function () {
	return view('/Admin/Kiemduyet',['name'=>' Kiểm Duyệt !!!']);
});

Route::get('/Admin/login',function () {
	return view('/Admin/login',['name'=>' Login !!!']);
});

Route::get('/Admin/logout',function () {
	return view('/Admin/logout',['name'=>' Logout !!!']);
});

Route::get('/Admin/Thongtin_member',function () {
	return view('/Admin/Thongtin_member',['name'=>' Thông tin Member !!!']);
});

Route::get('/Admin/Thongtin_user',function () {
	return view('/Admin/Thongtin_user',['name'=>' Thông tin User  !!!']);
});

Route::get('/Admin/Traodoi_member',function () {
	return view('/Admin/Traodoi_member',['name'=>'Traodoi_member !!!']);
});



// Browser
Route::get('/Browser/Doisong',function () {
	return view ('/Browser/Doisong',['name'=>' Doisong !!!']);
});

Route::get('/Browser/Dulich',function () {
	return view ('/Browser/Dulich',['name'=>' Dulich !!!']);
});

Route::get('/Browser/Giaitri',function () {
	return view ('/Browser/Giaitri',['name'=>' Giaitri !!!']);
});

Route::get('/Browser/Giaoduc',function () {
	return view ('/Browser/Giaoduc',['name'=>' Giaoduc !!!']);
});

Route::get('/Browser/Gocnhin',function () {
	return view ('/Browser/Gocnhin',['name'=>' Gocnhin !!!']);
});

Route::get('/Browser/Khoahoc',function () {
	return view ('/Browser/Khoahoc',['name'=>' Khoahoc !!!']);
});

Route::get('/Browser/Kinhdoanh',function () {
	return view ('/Browser/Kinhdoanh',['name'=>' Kinhdoanh !!!']);
});

Route::get('/Browser/Phapluat',function () {
	return view ('/Browser/Phapluat',['name'=>' Phapluat !!!']);
});

Route::get('/Browser/Sohoa',function () {
	return view ('/Browser/Sohoa',['name'=>' Sohoa !!!']);
});


Route::get('/Browser/Suckhoe',function () {
	return view ('/Browser/Suckhoe',['name'=>' Suckhoe !!!']);
});

Route::get('/Browser/Tamsu',function () {
	return view ('/Browser/Tamsu',['name'=>'Tamsu !!!']);
});

Route::get('/Browser/Thegioi',function () {
	return view ('/Browser/Thegioi',['name'=>' Thegioi !!!']);
});

Route::get('/Browser/Thethao',function () {
	return view ('/Browser/Thethao',['name'=>' Thethao !!!']);
});

Route::get('/Browser/Thoisu',function () {
	return view ('/Browser/Thoisu',['name'=>' Thời sự !!!']);
});

Route::get('/Browser/Xe&doisong',function () {
	return view ('/Browser/Xe&doisong',['name'=>' Xe và Doisong !!!']);
});

Route::get('/Browser/Ykien',function () {
	return view ('/Browser/Ykien',['name'=>' Ykien !!!']);
});



// Member
Route::get('/Member/Dangbai',function () {
	return view ('/Member/Dangbai',['name'=>' Dangbai !!!']);
});

Route::get('/Member/Login',function () {
	return view ('/Member/Login',['name'=>' Login !!!']);
});

Route::get('/Member/Logout',function () {
	return view ('/Member/Logout',['name'=>' Logout !!!']);
});

Route::get('/Member/Thaydoithongtin_member',function () {
	return view ('/Member/Thaydoithongtin_member',['name'=>' Thaydoithongtin_member !!!']);
});

Route::get('/Member/Traodoi_bientap',function () {
	return view ('/Member/Traodoi_bientap',['name'=>' Traodoi_bientap !!!']);
});

Route::get('/Member/Update_bai',function () {
	return view ('/Member/Update_bai',['name'=>' Update_bai !!!']);
});



// User
Route::get('/User/login', function() {
	return view('/User/Login',['name'=>' Login !!!']);
});

Route::get('/User/logout', function() {
	return view('/User/Logout',['name'=>' Logout !!!']);
});


