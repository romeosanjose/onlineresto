<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
  public function show()
  {
    // $homes = Home::orderBy('position','asc')->get();
    return view('frontend.home');
  }
}
