<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hameed extends Controller
{
  public function index(){
      return view('index')->with('data',2);
      
      
  }  
}


