@extends('Master.Master')
@section('title', 'Page Title')

 @section('sidebar')

   @parent

      <p>Kmin laravel.</p>

   @endsection

      @section('content')

      <h2>{{$name}}</h2>

      <p>Well come Kmin laravel !!!.</p>

   @endsection

