<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class frontendController extends Controller
{
   public function index(){
		   return view('frontend.pages.index');
	 
	}
	 public function career(){
    	return view('frontend.pages.career');
    }
}

