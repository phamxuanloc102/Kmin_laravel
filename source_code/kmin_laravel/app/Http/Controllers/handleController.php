<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class handleController extends Controller
{
      public function getForm(){
        return view('/User/index');
    }
      public function getForm2(){
        return view('/User/profile');
    }
}
