@extends('Master.Master')
@section('title', 'Page Title')

 @section('sidebar')

   @parent
   	<center>
		      <form action="profile"  method="post" >
		       Nhập Họ tên : <input id=t type="text" name="name"  placeholder=" User name" >
		       <p></p>
		       Nhập Số DT():<input id=t type='number' name='number'  placeholder="Số điện thoại">
		       <p></p>
		       Nhập địa chỉ():<input id=t type='text' name='address'  placeholder="Địa chỉ">
		        <p></p>
		        <input style=" width:200px;height: 50px;border-radius: 15px; background-color: tomato;color:whitesmoke" type="submit" name="ok" value="Submit">
		    </form>
	
   @endsection

      @section('content')

      <p><h1>Well come Kmin laravel !!!.</h1></p>
	</center>
   @endsection

