<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerName extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Browser
     public function doisong(){
       return view ('/Browser/doisong',['name'=>' doisong']);
    }
     public function dulich(){
        return view ('/Browser/dulich',['name'=>' du lịch']);
    }
     public function giaitri(){
        return view ('/Browser/giaitri',['name'=>' giải trí']);
    }
     public function giaoduc(){
       return view ('/Browser/giaoduc',['name'=>' giáo dục!']);
    }
     public function gocnhin(){
        return view ('/Browser/gocnhin',['name'=>' góc nhìn']);
    }
     public function khoahoc(){
       return view ('/Browser/khoahoc',['name'=>' khoahoc']);
    }
     public function kinhdoanh(){
        return view ('/Browser/kinhdoanh',['name'=>' kinh doanh']);
    }
     public function phapluat(){
        return view ('/Browser/phapluat',['name'=>' pháp luật']);
    }
     public function sohoa(){
        return view ('/Browser/sohoa',['name'=>' số hóa']);
    }
     public function suckhoe(){
        return view ('/Browser/suckhoe',['name'=>'  suckhoe']);
    }
     public function tamsu(){
        return view ('/Browser/tamsu',['name'=>' tâm sự']);
    }
     public function thegioi(){
        return view ('/Browser/thegioi',['name'=>' thế giới']);
    }
     public function thethao(){
        return view ('/Browser/thethao',['name'=>' thể thao']);
    }
     public function thoisu(){
        return view ('/Browser/thoisu',['name'=>' thời sự']);
    }
     public function xe(){
       return view ('/Browser/xe&doisong',['name'=>' car&life']);
    }
    public function ykien(){
       return view ('/Browser/ykien',['name'=>'opinion']);
    }


    //Admin
     public function kiemduyet(){
        return view('/Admin/kiemduyet',['name'=>' kiểm duyệt ']);
    }
     public function thongtin(){
        return view('/Admin/thongtin_member',['name'=>' thông tin member ']);
    }


    //Member
    public function update_bai(){
        return view ('/Member/update_bai',['name'=>'update']);
    }

     public function login(){
       return view ('/Member/login',['name'=>'login']);
    }
     public function logout(){
       return view ('/Member/logout',['name'=>'logout']);
    }
     public function dangbai(){
      return view ('/Member/dangbai',['name'=>'dangbai']);
    }





    //User
     public function binhluan()
    {
        return view('/User/binhluan');
    }

    public function index()
    {
        
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
