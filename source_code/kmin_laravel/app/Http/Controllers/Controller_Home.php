<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function banggiadichvu(){
       return view ('/home/banggiadichvu',['name'=>'bảng giá dịch vụ']);
    }
     public function chothuechungcu(){
        return view ('/home/chothuechungcu',['name'=>' cho thuê chung cư']);
    }
     public function chothhuematbang(){
        return view ('/home/chothhuematbang',['name'=>' cho thuê mặt bằng']);
    }
     public function chothuenhanguyencan(){
       return view ('/home/chothuenhanguyencan',['name'=>' cho thuê nhà nguyên căn']);
    }
     public function chothuephongtro(){
        return view ('/home/chothuephongtro',['name'=>' cho thuê phòng trọ']);
    }
     public function dangnhap(){
       return view ('/home/dangnhap',['name'=>' Đăng nhập']);
    }
     public function dangky(){
        return view ('/home/dangky',['name'=>' Đăng ký']);
    }
     public function huongdan(){
        return view ('/home/huongdan',['name'=>' hướng dẫn']);
    }
     public function timnguoioghep(){
        return view ('/home/timnguoioghep',['name'=>' tìm người ở ghép']);
    }
     public function trangchu(){
        return view ('/home/trangchu',['name'=>'  trang chủ']);
    }
     public function dangtin(){
        return view ('/home/dangtin',['name'=>'  đăng tin']);
    }
     public function thanhtoan(){
        return view ('/home/thanhtoan',['name'=>' thanhtoan']);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
