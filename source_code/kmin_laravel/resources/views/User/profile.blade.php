
@extends('Master.Master')
@section('title', 'Page Title')
	
 @section('content')
 <center>
	 <?php
         $name=$_POST['name'];
         $number=$_POST['number'];
         $address=$_POST['address'];
         $gioitinh=$_POST['gioitinh'];
        echo "<h2 >Infomation User</h2>"; 
    	echo "<b>Họ & tên : </b>".$_POST['name'] ;
    	echo"<p></p>";
        echo "<b>Giới & tính : </b>".$_POST['gioitinh'] ;
        echo"<p></p>";
    	echo "<b>Số điện thoại :</b>".$_POST['number'];
    	echo"<p></p>";
    	echo "<b>Địa chỉ :</b>".$_POST['address'];
	?>
      
	</center>
 @endsection