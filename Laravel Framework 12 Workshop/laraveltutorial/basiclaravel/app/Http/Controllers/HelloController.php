<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function show(){
      return view('create.users')
      ->with('name','kongruksiamza')
      ->with('title','Laravel tutorial basic to advance');
    }
}
