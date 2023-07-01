<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    
 public function index() {
        return view('index');
    }
 public function about() {
        return view('about');
    }
  public function contactus() {
        return view('contactus');
    }
    public function car() {
        return view('car');
    }
    
}
