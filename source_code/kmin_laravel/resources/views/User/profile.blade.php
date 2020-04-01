
@extends('Master.Master')
@section('title', 'Page Title')


	<?php
    	echo "Họ & tên, ". $_POST['name'];
    	echo "Số điện thoại".$_POST['number'];
    	echo "Địa chỉ".$_POST['address'];
	?>
	
 @section('content')
      <p><h1>Well come Kmin laravel !!!.</h1></p>
	</center>
 @endsection