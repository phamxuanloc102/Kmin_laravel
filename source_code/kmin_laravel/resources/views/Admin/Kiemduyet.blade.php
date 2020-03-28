@extends('Footer.Footer')
@extends('Content.Content')
@extends('Header.Topheader')
@section('title', 'The News Paper')
@section('sidebar')

   @parent

      <p>Kmin laravel !.</p>

   @endsection

      @section('content')

      <h2>{{$name}}</h2>

      <p>Xin Chào Mọi Người !</p>

   @endsection